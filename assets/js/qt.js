QTags.addButton('bnph-bangla', 'Bangla', bnph_bangla);
QTags.addButton('bnph-english', 'English', bnph_english);

var bnph_initialized = false;
function bnph_bangla(){
    if(!bnph_initialized){
        jQuery(".wp-editor-area").bnKb({
            "switchkey": 'e',
            "driver": phonetic
        });
        bnph_initialized = true;
    }else{
        jQuery(".wp-editor-area").bnKb.sw("b");
    }
}
function bnph_english() {
    jQuery(".wp-editor-area").bnKb.sw("e");
}