$(document).ready(function () {
    const formatFileSize = (bytes) => {
        if (bytes === 0) return '0 Bytes';
        const k = 1024;
        const sizes = ['Bytes', 'KB', 'MB', 'GB'];
        const i = Math.floor(Math.log(bytes) / Math.log(k));
        return parseFloat((bytes / Math.pow(k, i)).toFixed(2)) + ' ' + sizes[i];
    };

    const initUpload = (selector, type) => {
        $(selector).each(function () {
            const container = $(this);
            const input = container.find('input[type="file"]');
            const maxFileSize = parseInt(input.attr('data-maxSize')) * 1024 * 1024;

            const uploadContent = container.find('.upload-content');
            const fileDetails = container.find('.file-details');
            const preview = container.find('.preview-media');

            let buttonSelector = '';
            if (type === 'image') buttonSelector = '.imageUploadButton';
            if (type === 'video') buttonSelector = '.videoUploadButton';
            if (type === 'file') buttonSelector = '.fileUploadButton';

            container.on('click', buttonSelector, () => input.trigger('click'));

            input.on('change', function (e) {
                const file = e.target.files[0];
                if (!file || file.size > maxFileSize) {
                    alert('File too large or unsupported format.');
                    return;
                }

                const isValidType = (
                    (type === 'image' && file.type.match('image.*')) ||
                    (type === 'video' && file.type.match('video.*')) ||
                    (type === 'file')
                );

                if (!isValidType) {
                    alert('Invalid file type.');
                    return;
                }

                if (type === 'image' || type === 'video') {
                    const reader = new FileReader();
                    reader.onload = function (e) {
                        if (type === 'image') {
                            preview.find('img').attr('src', e.target.result).removeClass('d-none');
                        } else if (type === 'video') {
                            const videoEl = preview.find('video').attr('src', e.target.result)[0];
                            videoEl.load(); // ✅ make the video reload and be playable
                        }

                        preview.removeClass('d-none');
                        uploadContent.addClass('d-none');
                        fileDetails.find('.file-name').text(file.name);
                        fileDetails.find('.file-size').text(formatFileSize(file.size));
                        fileDetails.removeClass('d-none');
                    };
                    reader.readAsDataURL(file);
                } else if (type === 'file') {
                    preview.removeClass('d-none');
                    uploadContent.addClass('d-none');
                    fileDetails.find('.file-name').text(file.name);
                    fileDetails.find('.file-size').text(formatFileSize(file.size));
                    fileDetails.removeClass('d-none');
                }
            });

            fileDetails.on('click', '.remove-btn', function () {
                input.val('');
                preview.addClass('d-none').find('img, video').attr('src', '');
                fileDetails.addClass('d-none');
                uploadContent.removeClass('d-none');
            });
        });
    };

    initUpload('.imageUpload', 'image');
    initUpload('.videoUpload', 'video');
    initUpload('.fileUpload', 'file');
});
