(() => {
    'use strict';

    document.querySelectorAll('[data-modal-target]').forEach((opener) => {
        const dialog = document.getElementById(opener.dataset.modalTarget);
        if (!(dialog instanceof HTMLDialogElement)) {
            return;
        }

        opener.addEventListener('click', () => {
            dialog.showModal();
        });
    });

    document.querySelectorAll('dialog.modal').forEach((dialog) => {
        dialog.querySelectorAll('[data-modal-close]').forEach((btn) => {
            btn.addEventListener('click', () => dialog.close());
        });

        dialog.addEventListener('click', (event) => {
            if (event.target === dialog) {
                dialog.close();
            }
        });
    });
})();
