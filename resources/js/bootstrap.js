import axios from 'axios';
import Fuse from "fuse.js";

window.axios = axios;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

window.Fuse = Fuse;