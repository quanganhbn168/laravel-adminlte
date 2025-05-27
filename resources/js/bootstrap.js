import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
// resources/js/bootstrap.js

// 1) Import jQuery *và* expose ra toàn cục **ngay lập tức**
import $ from 'jquery';
window.$ = window.jQuery = $;

// 2) Bây giờ import Bootstrap 5 (Popper đã kèm sẵn)
import 'bootstrap';

// 3) Nếu dùng AdminLTE 4:
import 'admin-lte/dist/js/adminlte.min.js';
