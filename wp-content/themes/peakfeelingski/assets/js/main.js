// write your jquery here...

jQuery('.gallery').magnificPopup({
    delegate: 'a', // child items selector, by clicking on it popup will open
    type: 'image',
    gallery: {
        enabled:true,
        navigateByImgClick: true,
    },
    image:{
        titleSrc: 'title'
    }
    // other options
});


//# sourceMappingURL=main.js.map