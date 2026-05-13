import Swal from 'sweetalert2';

/*
Toast Existoso
*/

export function toastSuccess(message = 'Operacion Exitosa'){
    Swal.fire({
        toast: true,
        position: 'top-end',
        icon: 'success',
        title: message,
        showConfirmButton: false,
        timer: 2500,
        timerProgressBar: true    
    });
}

/**
 * Toast Error
 */

export function toastError(message = 'Ocurrio un Error'){
    Swal.fire({
        toast: true,
        position: 'top-end',
        icon: 'error',
        title: message,
        showConfirmButton: false,
        timer: 3000
    });
}

/**
 * Confirmacion Generica
*/

export async function confirmAction({
    title = '¿Estas Seguro?',
    text = '',
    confirmText = 'Si',
    cancelText = 'Cancelar',
    icon = 'warning'
} = {}) {
     const result = await Swal.fire({
        title,
        text,
        icon,
        showCancelButton: true,
        confirmButtonText: confirmText,
        cancelButtonText: cancelText,
        reverseButton: true
     })
     return result.isConfirmed;
}


/**
 * Confirmar Eliminacion
 */

export async function confirmDelete(){
    return await confirmAction({
        title: '¿Eliminar Registro?',
        text: 'Esta Accion no se puede Deshacer.',
        confirmText: 'Si, eliminar',
        cancelText: 'Cancelar',
        icon: 'warning'
    })
}