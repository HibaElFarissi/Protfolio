import './bootstrap';

import $ from 'jquery';
window.$ = window.jQuery = $;

import Swal from 'sweetalert2';
window.Swal = Swal;

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();
