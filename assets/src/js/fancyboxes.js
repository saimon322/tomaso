import { Fancybox } from "@fancyapps/ui";

const fancyLinkForms = document.querySelectorAll("a[href='#form']");
for (const item of fancyLinkForms) {
    item.setAttribute('data-fancybox', '');
}

Fancybox.bind("[data-fancybox]", {
    template: {
        closeButton: '<svg width="24" height="24"><use xlink:href="#fancymaps-close"></use></svg>',
    }
});