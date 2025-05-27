// resources/js/summernote-init.js
import $ from 'jquery';
import 'summernote/dist/summernote-bs5.js';

document.addEventListener('DOMContentLoaded', () => {
  $('.summernote').summernote({
    height: 300,
    toolbar: [
      ['style', ['style']],
      ['font', ['bold','italic','underline','clear']],
      ['para', ['ul','ol','paragraph']],
      ['insert', ['link','picture','video','table']],
      ['view', ['fullscreen','codeview']]
    ]
  });
});
