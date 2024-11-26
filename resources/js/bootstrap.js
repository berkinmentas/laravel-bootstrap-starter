import _ from 'lodash';
import * as bootstrap from 'bootstrap';
import jQuery from 'jquery';
import axios from 'axios';

window._ = _;
window.bootstrap = bootstrap
window.$ = window.jQuery = jQuery;
window.axios = axios;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
