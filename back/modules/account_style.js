$(document).ready(function () {

    switch (theme) {
        case 1:
            $('link')[3].remove()
            $('link')[2].prepend(`<link rel="stylesheet" href="../styles/style_bleu.css">`)
        break;
        case 2:
            $('link')[3].remove()
            $('link')[2].prepend(`<link rel="stylesheet" href="../styles/style_noir.css">`)
        break;
    
        default:

            break;
    }
})