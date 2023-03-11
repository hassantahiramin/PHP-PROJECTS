var FormTagsCategories = function () {
   
    var handleTagsInput = function () {
        if (!jQuery().tagsInput) {
            return;
        }
        $('#tags_cat1').tagsInput({
            width: 'auto',
            'onAddTag': function () {
                //alert(1);
            },
        });
        $('#tags_cat2').tagsInput({
            width: 'auto',
            'onAddTag': function () {
                //alert(1);
            },
        });
        $('#tags_cat3').tagsInput({
            width: 'auto',
            'onAddTag': function () {
                //alert(1);
            },
        });
        $('#tags_2').tagsInput({
            width: 300
        });
		$('input').tagsinput({
			maxTags: 2
		});
    }
    
    return {
        //main function to initiate the module
        init: function () {
            handleTagsInput();
        }
    };

}();