import { Fancybox } from "@fancyapps/ui";

Fancybox.bind("[data-fancybox]", {
    template: {
        closeButton: '<svg width="24" height="24"><use xlink:href="#fancymaps-close"></use></svg>',
    }
});
