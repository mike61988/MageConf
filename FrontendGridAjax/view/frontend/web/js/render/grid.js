// MageConf/FrontendGridAjax/view/frontend/web/js/render/grid.js
define([
    'jquery',
    'Magento_Catalog/js/price-utils',
    'mage/template',
    'text!MageConf_FrontendGridAjax/template/grid.html',
    'underscore',
    'mage/url'
], function ($, priceUtils, mageTemplate, gridTpl, _, urlBuilder) {
    "use strict";

    $.widget('mageconf.ajax', {
        options: {
            template: gridTpl,
            url: urlBuilder.build('/ajax/grid/ajaxData'),
            type: 'post',
            dataType: 'json',
            format: {
                decimalSymbol: ".",
                groupLength: 3,
                groupSymbol: ",",
                integerRequired: 1,
                pattern: "$%s",
                precision: 2,
                requiredPrecision: 2
            }
        },

        _create: function() {
            this.ajaxData();
        },

        ajaxData: function() {
            $.ajax({
                url: this.options.url,
                type: this.options.type,
                dataType: this.options.dataType,

                beforeSend: function(response) {
                    console.log('beforeSend ', response);
                }
            }).done(function(data) {
                this.render(data);
            }.bind(this));
        },

        render: function (data) {
            var self = this,
                source = self.options.template,
                template = mageTemplate(source),
                html;

            _.each(data, function (value, key) {
                value.price = priceUtils.formatPrice(value.price, self.options.format);
            },this);

            html = template({products: data});
            $(self.element).find('.some-grid').append(html);
        }
    });

    return $.mageconf.ajax;
});