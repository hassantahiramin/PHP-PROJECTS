var FormTagsProducts = function () {
   
    var handleTagsInput = function () {
        if (!jQuery().tagsInput) {
            return;
        }
        $('#tags_pro').tagsInput({
            width: 'auto',
            'onAddTag': function () {
                //alert(1);
            },
        });
		$('#tags_pro').tagsinput({
			maxTags: 2,
		});
    }
    
    return {
        //main function to initiate the module
        init: function () {
            handleTagsInput();
        }
    };

}();