import './bootstrap';

// Bootstrap + AdminLTE 4
import 'bootstrap';
import 'admin-lte/dist/js/adminlte.min.js';

// Optional: FontAwesome (nếu dùng)
import '@fortawesome/fontawesome-free/js/all';

import * as FilePond from 'filepond';
import FilePondPluginImagePreview from 'filepond-plugin-image-preview';

FilePond.registerPlugin(FilePondPluginImagePreview);

document.addEventListener('DOMContentLoaded', function () {
  const imageInput = document.querySelector('input[name="image"]');
  if (imageInput) {
    FilePond.create(imageInput, {
      allowMultiple: false,
      instantUpload: false,
      server: null
    });
  }
});

import Toastify from 'toastify-js';
window.Toastify = Toastify;
