// resources/js/app.js

// Load jQuery ↓ Bootstrap ↓ AdminLTE
import './bootstrap';

// Nếu cần FilePond, Toastify, v.v.
import 'filepond/dist/filepond.min.css';   // nếu import CSS ở đây
import './filepond-init.js';

import Toastify from 'toastify-js';
window.Toastify = Toastify;
// Cuối cùng, các script “common” của bạn:
import './main.js';
import './carousel-home.js';
