// resources/js/filepond-init.js
import * as FilePond from 'filepond';
import FilePondPluginImagePreview      from 'filepond-plugin-image-preview';
import FilePondPluginFileValidateType  from 'filepond-plugin-file-validate-type';
import FilePondPluginFileValidateSize  from 'filepond-plugin-file-validate-size';
import Toastify                       from 'toastify-js';

// CSS
import 'filepond/dist/filepond.min.css';
import 'filepond-plugin-image-preview/dist/filepond-plugin-image-preview.min.css';

FilePond.registerPlugin(
  FilePondPluginImagePreview,
  FilePondPluginFileValidateType,
  FilePondPluginFileValidateSize
);

const csrfToken = document.head.querySelector('meta[name="csrf-token"]').content;

document.addEventListener('DOMContentLoaded', () => {
  document.querySelectorAll('input.filepond').forEach(input => {
    const folder     = input.dataset.folder || 'uploads';
    const initialSrc = input.dataset.initialSrc;

    const server = {
      // Load existing image (for edit)
      load: (source, load, error, progress, abort, headers) => {
        const xhr = new XMLHttpRequest();
        xhr.open('GET', source);
        xhr.responseType = 'blob';

        xhr.onload = () => load(xhr.response);
        xhr.onerror = () => error('Could not load image');
        xhr.onprogress = e => progress(e.lengthComputable, e.loaded, e.total);

        xhr.send();
        return {
          abort: () => {
            xhr.abort();
            abort();
          }
        };
      },

      // Upload mới
      process: {
        url: '/upload',
        method: 'POST',
        headers: { 'X-CSRF-TOKEN': csrfToken },
        ondata: formData => {
          formData.append('folder', folder);
          return formData;
        },
        onload: res => res,
        onerror: err => {
          Toastify({
            text: "Upload lỗi: " + err,
            duration: 3000,
            gravity: "top",
            position: "right",
            backgroundColor: "#dc3545"
          }).showToast();
          return err;
        }
      },

      revert: null
    };

    const options = {
      name: input.name,
      allowMultiple: false,
      acceptedFileTypes: ['image/*'],
      maxFileSize: '5MB',
      server
    };

    if (initialSrc) {
      options.files = [{
        source: initialSrc,
        options: { type: 'local' }
      }];
    }

    FilePond.create(input, options);
  });
});
