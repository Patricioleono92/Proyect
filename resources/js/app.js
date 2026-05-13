import './bootstrap';
import { toastSuccess,
        toastError,
        confirmAction,
        confirmDelete } from './lib/alerts';

window.toastError = toastError
window.toastSuccess = toastSuccess
window.confirmAction = confirmAction
window.confirmDelete = confirmDelete
