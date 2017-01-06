/*! Select2 4.0.1 | https://github.com/select2/select2/blob/master/LICENSE.md */

(function () {
    if (jQuery && jQuery.fn && jQuery.fn.select2 && jQuery.fn.select2.amd)var e = jQuery.fn.select2.amd;
    return e.define("select2/i18n/ar", [], function () {
        return {
            errorLoading: function () {
                return "لا يمكن تحميل النتائج"
            }, inputTooLong: function (e) {
                var t = e.input.length - e.maximum, n = "الرجاء حذف " + t + " عناصر";
                return n
            }, inputTooShort: function (e) {
                var t = e.minimum - e.input.length, n = "الرجاء إضافة " + t + " عناصر";
                return n
            }, loadingMore: function () {
                return "جاري تحميل نتائج إضافية..."
            }, maximumSelected: function (e) {
                var t = "تستطيع إختيار " + e.maximum + " بنود فقط";
                return t
            }, noResults: function () {
                return "لم يتم العثور على أي نتائج"
            }, searching: function () {
                return "جاري البحث…"
            }
        }
    }), {define: e.define, require: e.require}
})();