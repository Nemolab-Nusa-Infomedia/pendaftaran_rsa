function initStepper() {
    const steps = document.querySelectorAll('.stepper .step');
    steps.forEach((step, index) => {
        if (index === 0) {
            step.classList.add('active');
        }
    });

    document.getElementById('next-button-1').addEventListener('click', function() {
        document.getElementById('form-part-1').classList.add('d-none');
        document.getElementById('form-part-2').classList.remove('d-none');
        updateStepper(2);
    });

    document.getElementById('back-button-1').addEventListener('click', function() {
        document.getElementById('form-part-2').classList.add('d-none');
        document.getElementById('form-part-1').classList.remove('d-none');
        updateStepper(1);
    });

    document.getElementById('next-button-2').addEventListener('click', function() {
        document.getElementById('form-part-2').classList.add('d-none');
        document.getElementById('form-part-3').classList.remove('d-none');
        updateStepper(3);
    });

    document.getElementById('back-button-2').addEventListener('click', function() {
        document.getElementById('form-part-3').classList.add('d-none');
        document.getElementById('form-part-2').classList.remove('d-none');
        updateStepper(2);
    });
}

function updateStepper(currentStep) {
    const steps = document.querySelectorAll('.stepper .step');
    steps.forEach((step, index) => {
        if (index < currentStep - 1) {
            step.classList.add('active');
        } else if (index === currentStep - 1) {
            step.classList.add('active');
        } else {
            step.classList.remove('active');
        }
    });
}

document.addEventListener('DOMContentLoaded', initStepper);



// progres file

var interval;
var fileInput = document.getElementById('file-upload');
var uploadProgress = document.getElementById('upload-progress');
var progressBar = document.getElementById('progress-bar');
var retryButtons = document.getElementById('retry-buttons');
var fileNameElement = document.getElementById('file-name');
var fileSizeElement = document.getElementById('file-size');

function resetUpload() {
    fileInput.value = '';
    uploadProgress.classList.add('d-none');
    fileNameElement.textContent = 'nama file';
    fileSizeElement.textContent = '2 MB';
    fileSizeElement.classList.remove('text-success', 'text-danger');
    document.getElementById('cancel-icon').classList.remove('fa-trash', 'fa-solid');
    document.getElementById('cancel-icon').classList.add('fa-circle-xmark');
    progressBar.style.width = '0%';
    progressBar.textContent = '0%';
    retryButtons.classList.add('d-none');
    progressBar.parentElement.classList.remove('d-none');
}

fileInput.addEventListener('change', function(event) {
    var file = event.target.files[0];
    if (file) {

        fileNameElement.textContent = file.name;
        fileSizeElement.textContent = (file.size / 1024 / 1024).toFixed(2) + ' MB';

        uploadProgress.classList.remove('d-none');

        var width = 0;
        interval = setInterval(function() {
            if (width >= 100) {
                clearInterval(interval);
                fileSizeElement.textContent = "Berhasil diunggah";
                fileSizeElement.classList.add('text-success');
                document.getElementById('cancel-icon').classList.remove('fa-circle-xmark');
                document.getElementById('cancel-icon').classList.add('fa-solid', 'fa-trash');
                retryButtons.classList.add('d-none');
                progressBar.parentElement.classList.add('d-none');
            } else if (width < 0) {
                clearInterval(interval);
                fileSizeElement.textContent = "Upload failed";
                fileSizeElement.classList.add('text-danger');
                document.getElementById('cancel-icon').classList.remove('fa-circle-xmark');
                document.getElementById('cancel-icon').classList.add('fa-solid', 'fa-trash');
                retryButtons.classList.remove('d-none');
                progressBar.parentElement.classList.add('d-none');
            } else {
                width++;
                progressBar.style.width = width + '%';
                progressBar.textContent = width + '%';
            }
        }, 50);

        setTimeout(function() {
            if (Math.random() > 0.5) {
                width = -1;
            }
        }, 2000);
    }
});

document.getElementById('cancel-upload').addEventListener('click', function(event) {
    event.preventDefault();

    if (interval) {
        clearInterval(interval);
        interval = null;
    }

    resetUpload();
});

document.getElementById('retry-upload').addEventListener('click', function(event) {
    event.preventDefault();
    resetUpload();
    fileInput.click();
});

document.getElementById('remove-upload').addEventListener('click', function(event) {
    event.preventDefault();
    resetUpload();
});

// metode pembayaran
document.addEventListener('DOMContentLoaded', function() {
    const briOption = document.getElementById('bri-option');
    const qrisOption = document.getElementById('qris-option');
    const briSection = document.getElementById('bri-section');
    const qrisSection = document.getElementById('qris-section');

    briOption.addEventListener('change', function() {
        if (briOption.checked) {
            briSection.classList.remove('d-none');
            qrisSection.classList.add('d-none');
        }
    });

    qrisOption.addEventListener('change', function() {
        if (qrisOption.checked) {
            qrisSection.classList.remove('d-none');
            briSection.classList.add('d-none');
        }
    });
});

$(document).ready(function() {
    $('#formDonate').on('submit', function(e) {
        e.preventDefault();

        var formData = new FormData(this); // Buat FormData dari form
        $.ajax({
            url: '/donasi-send',
            type: 'POST',
            data: formData,
            contentType: false,  // Penting untuk menangani file
            processData: false,  // Penting untuk menangani file
            success: function(response) {
                if (response.status === 200) {
                    document.getElementById('form-part-3').classList.add('d-none');
                    document.getElementById('form-part-4').classList.remove('d-none');
                    updateStepper(4);
                } else {
                    alert('Something went wrong. Please try again.');
                }
            },
            error: function(xhr) {
                if (xhr.status === 500) {
                    $('#responseMessage').text('Server error! Please try again later.');
                } else if (xhr.status === 422) {
                    var errors = xhr.responseJSON.errors;
                    var errorMessage = '';
                    for (var field in errors) {
                        errorMessage += errors[field][0] + ' ';
                    }
                    alert(errorMessage);
                } else {
                    $('#responseMessage').text('Unexpected error. Please try again.');
                }
            }
        });
    });
});






