$(document).ready(function () {

    
    $(".result_search").click(function() {
        $("#filter_search").show();
    });

    $('.hotel_detail_main .scroll-title li:first-child a').addClass("active");

    $('.hotel_detail_main .scroll-title li a').click(function(){
        $('.hotel_detail_main .scroll-title li a').removeClass("active");
        $(this).addClass("active");
    });


    var fifthListItem = $(".attractions-list:eq(4)");

    fifthListItem.addClass("half-height");

    $(".attractions-list:gt(4)").hide();

    


    $('.checkCityDesTop').change(function () {

        var selectedCountryId = $(this).val();
        $('.visit-list_item').hide();
        $('.visit-list_item').filter(function () {
            return $(this).find('.checkBoxCity').data('id') == selectedCountryId;
        }).show();
    });




    document.querySelectorAll('[data-bs-toggle="tooltip"]').forEach((tooltip) => {
        new bootstrap.Tooltip(tooltip);
    });

    document.querySelectorAll('[data-bs-toggle="popover"]').forEach((popover) => {
        new bootstrap.Popover(popover);
    });

    // -------------------------------
    // Toasts
    // -------------------------------
    // Used by 'Placement' example in docs or StackBlitz
    const toastPlacement = document.getElementById('toastPlacement');
    if (toastPlacement) {
        document
            .getElementById('selectToastPlacement')
            .addEventListener('change', function () {
                if (!toastPlacement.dataset.originalClass) {
                    toastPlacement.dataset.originalClass = toastPlacement.className;
                }

                toastPlacement.className = `${toastPlacement.dataset.originalClass} ${this.value}`;
            });
    }

    document.querySelectorAll('.bd-example .toast').forEach((toastNode) => {
        const toast = new bootstrap.Toast(toastNode, {
            autohide: false,
        });

        toast.show();
    });

    const toastTrigger = document.getElementById('liveToastBtn');
    const toastLiveExample = document.getElementById('liveToast');

    if (toastTrigger) {
        const toastBootstrap =
            bootstrap.Toast.getOrCreateInstance(toastLiveExample);
        toastTrigger.addEventListener('click', () => {
            toastBootstrap.show();
        });
    }

    const alertPlaceholder = document.getElementById('liveAlertPlaceholder');
    const appendAlert = (message, type) => {
        const wrapper = document.createElement('div');
        wrapper.innerHTML = [
            `<div class="alert alert-${type} alert-dismissible" role="alert">`,
            `   <div>${message}</div>`,
            '   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>',
            '</div>',
        ].join('');

        alertPlaceholder.append(wrapper);
    };

    const alertTrigger = document.getElementById('liveAlertBtn');
    if (alertTrigger) {
        alertTrigger.addEventListener('click', () => {
            appendAlert('Nice, you triggered this alert message!', 'success');
        });
    }

    document
        .querySelectorAll('.carousel:not([data-bs-ride="carousel"])')
        .forEach((carousel) => {
            bootstrap.Carousel.getOrCreateInstance(carousel);
        });

    document
        .querySelectorAll('.bd-example-indeterminate [type="checkbox"]')
        .forEach((checkbox) => {
            if (checkbox.id.includes('Indeterminate')) {
                checkbox.indeterminate = true;
            }
        });

    document.querySelectorAll('.bd-content [href="#"]').forEach((link) => {
        link.addEventListener('click', (event) => {
            event.preventDefault();
        });
    });

    const exampleModal = document.getElementById('exampleModal');
    if (exampleModal) {
        exampleModal.addEventListener('show.bs.modal', (event) => {

            const button = event.relatedTarget;

            const recipient = button.getAttribute('data-bs-whatever');

            const modalTitle = exampleModal.querySelector('.modal-title');
            const modalBodyInput = exampleModal.querySelector('.modal-body input');

            modalTitle.textContent = `New message to ${recipient}`;
            modalBodyInput.value = recipient;
        });
    }

    const myOffcanvas = document.querySelectorAll(
        '.bd-example-offcanvas .offcanvas'
    );
    if (myOffcanvas) {
        myOffcanvas.forEach((offcanvas) => {
            offcanvas.addEventListener(
                'show.bs.offcanvas',
                (event) => {
                    event.preventDefault();
                },
                false
            );
        });
    }
});