import * as FilePond from 'filepond';

// Import the plugin code
import FilePondPluginImagePreview from 'filepond-plugin-image-preview';
import FilePondPluginImageExifOrientation from 'filepond-plugin-image-exif-orientation';
import FilePondPluginFileValidateSize from 'filepond-plugin-file-validate-size';

// Import the plugin styles
import 'filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css';

FilePond.registerPlugin(
    FilePondPluginImagePreview,
    FilePondPluginImageExifOrientation,
    FilePondPluginFileValidateSize,
);

FilePond.create(
    document.querySelector('#filepond'), {

    }
);

let csrf = document.getElementsByName('csrf-token')[0].getAttribute('content')

FilePond.setOptions({
    server: {
        url: 'http://localhost:8000/',
        process: {
            url: './api/upload/documents',
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': csrf
            },
        },
    },
})