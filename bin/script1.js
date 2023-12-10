var typingEffect = new Typed(".multiText", {
    strings: [
        "Experience the effortless transition of your TXT files into PDF documents with just a click.",
        "All made possible by ConvertEase – your trusted platform for file conversion"
    ],
    loop: true,
    typeSpeed: 20,
    backSpeed: 20,
    backDelay: 5000,
});

document.querySelector('.upload-form').addEventListener('change', function () {
    // Get the number of selected files
    var fileCount = this.querySelector('input[type="file"]').files.length;

    // Update the file count in the HTML
    document.getElementById('file-count').innerText = 'Number of TXTs chosen: ' + fileCount;

    var fileCountElement = document.getElementById('file-count');
    fileCountElement.style.display = 'inline-block';

    var chooseFileElement = document.querySelector('.choose-file-button');
    chooseFileElement.style.display = 'none';

    var uploadFileElement = document.querySelector('.upload-button');
    uploadFileElement.style.display = 'inline-block';

    var afterBoxElement = document.querySelector('.afterbox');
    afterBoxElement.style.display = 'inline-block';
});
