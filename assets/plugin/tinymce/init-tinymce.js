tinymce.init({
	/* replace textarea having class .tinymce with tinymce editor */
	selector: "textarea.tinymce",
	
	/* theme of the editor */
	theme: "modern",
	skin: "lightgray",
	
	/* width and height of the editor */
	width: "100%",
	height: 300,
	
	relative_urls : true,

	document_base_url : "http://localhost/ucsc/",

	/* display statusbar */
	statubar: true,
	
	/* plugin */
	plugins: [
		"advlist autolink link image lists charmap print preview hr anchor pagebreak",
		"searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
		"save table contextmenu directionality emoticons template paste textcolor"
	],

	theme_advanced_buttons3_add : "template",

	/*menubar: "insert",*/
  
  	template_cdate_classes: "cdate creationdate",

  	template_mdate_classes: "mdate modifieddate",

  	template_selected_content_classes: "selcontent",

  	template_cdate_format: "%m/%d/%Y : %H:%M:%S",

  	template_mdate_format: "%m/%d/%Y : %H:%M:%S",

  	template_replace_values: {
    	username : "Jack Black",
    	staffid : "991234"
  	},

  	template_popup_height: "1000",

  	template_popup_width: "500",

  	templates : [
    {
      title: "Create Ad",
      url : "http://localhost/ucsc/assets/templates/createAd.html",
      description : "Edit the fields shown in red"
    },
      {
        title: "Timestamp",
        content: '<div class="bms-owi-rte-warning"><span>lollllll</span></div>'
      }
  ],
	
  	

	/* toolbar */
	toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons | fontsizeselect | fontselect | templates",
	
	fontsize_formats: "8px 10px 12px 14px 18px 24px 36px",

	font_formats: 'Arial=arial,helvetica,sans-serif;Courier New=courier new,courier,monospace;',

	/* style */
	style_formats: [
		{title: "Headers", items: [
			{title: "Header 1", format: "h1"},
			{title: "Header 2", format: "h2"},
			{title: "Header 3", format: "h3"},
			{title: "Header 4", format: "h4"},
			{title: "Header 5", format: "h5"},
			{title: "Header 6", format: "h6"}
		]},
		{title: "Inline", items: [
			{title: "Bold", icon: "bold", format: "bold"},
			{title: "Italic", icon: "italic", format: "italic"},
			{title: "Underline", icon: "underline", format: "underline"},
			{title: "Strikethrough", icon: "strikethrough", format: "strikethrough"},
			{title: "Superscript", icon: "superscript", format: "superscript"},
			{title: "Subscript", icon: "subscript", format: "subscript"},
			{title: "Code", icon: "code", format: "code"}
		]},
		{title: "Blocks", items: [
			{title: "Paragraph", format: "p"},
			{title: "Blockquote", format: "blockquote"},
			{title: "Div", format: "div"},
			{title: "Pre", format: "pre"}
		]},
		{title: "Alignment", items: [
			{title: "Left", icon: "alignleft", format: "alignleft"},
			{title: "Center", icon: "aligncenter", format: "aligncenter"},
			{title: "Right", icon: "alignright", format: "alignright"},
			{title: "Justify", icon: "alignjustify", format: "alignjustify"}
		]}
	]

	
});