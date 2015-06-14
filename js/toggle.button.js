$(function ($) {
	$.widget("toggle.toggleButton", {
		options : {
			text : "Toggle",
			toggleOnColor : "green",
			onTitle : "On",
			offTitle : "Off",
			onImg: "toggleON.png",
			offImg: "toggleOFF.png",
			change : null
		},
	
		_create : function() {
			var id = this.element.attr("id");
			var checkBoxStyle = this.element.attr("style");
	
			this.element.css({
				"display" : "none"
			});
	
			this.checkboxButton = $("<label>", {
				text : this.options.text,
				"class" : "toggleButton",
				"for" : id,
				"style" : checkBoxStyle
			});
	
			this.element.after(this.checkboxButton);
	
			if (this.element.is(":checked")) {
				this.element
					.next("label").css({ "background" : this.options.toggleOnColor, "color" : "white" })
					.prop({ "title" : this.options.onTitle })
					.prepend('<span class="toggle-img" style="background:url(' + this.options.onImg + '); background-position:center;" />');
	
			} else {
				this.element
					.next("label").css({ "background" : "", "color" : "grey" })
					.prop({ "title" : this.options.offTitle })
					.prepend('<span class="toggle-img" style="background:url(' + this.options.offImg + '); background-position:center;" />');
	
			};
	
			this._on(this.element, {
				"change" : function(event) {
					if (this.element.is(":checked")) {
						this.element
							.next("label").css({ "background" : this.options.toggleOnColor, "color" : "white" })
							.prop({ "title" : this.options.onTitle })
							.find(".toggle-img")
							.css({"background" : "url(" + this.options.onImg + ")" });
					} else {
						this.element
							.next("label").css({ "background" : "", "color" : "grey" })
							.prop({ "title" : this.options.offTitle })
							.find(".toggle-img")
							.css({"background" : "url(" + this.options.offImg + ")" });
					};
				}
			});
		}
	});
}(jQuery)); 