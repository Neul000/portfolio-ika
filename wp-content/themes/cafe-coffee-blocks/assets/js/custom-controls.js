(function(api) {

    api.sectionConstructor['cafe-coffee-blocks-upsell'] = api.Section.extend({
        attachEvents: function() {},
        isContextuallyActive: function() {
            return true;
        }
    });

})(wp.customize);