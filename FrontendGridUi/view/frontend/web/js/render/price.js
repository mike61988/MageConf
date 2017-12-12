// MageConf/FrontendGridUi/view/frontend/web/js/render/price.js
define([
    'Magento_Catalog/js/price-utils',
    'Magento_Ui/js/grid/columns/column'
], function (priceUtils, Column) {
    "use strict";

    return Column.extend({
        defaults: {
            priceFormat: {
                decimalSymbol: ".",
                groupLength: 3,
                groupSymbol: ",",
                integerRequired: 1,
                pattern: "$%s",
                precision: 2,
                requiredPrecision: 2
            }
        },

        getLabel: function (record) {
            return priceUtils.formatPrice(record[this.index], this.priceFormat);
        }
    });
});