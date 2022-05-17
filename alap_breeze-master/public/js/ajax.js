class Ajax {
    constructor(token) {
        this.token = token;
    }

ajaxApiGet(apivegpont, callback) {
        $.ajax({
            url: apivegpont,
            type: "GET",
            success: function (result) {
                callback(result);
            },
        });
    }

    ajaxApiPut(apivegpont, id, data) {
        $.ajax({
            headers:{'X-CSRF-TOKEN':this.token},
            url: apivegpont + "/" + id,
            type: "PUT",
            data: data,
        });
    }

    ajaxApiDelete(apivegpont, id) {
        $.ajax({
            headers:{'X-CSRF-TOKEN':this.token},
            url: apivegpont + "/" + id,
            type: "DELETE"
        });
    }

    ajaxApiPost(apivegpont, data) {
        $.ajax({
            headers:{'X-CSRF-TOKEN':this.token},
            url: apivegpont,
            type: "POST",
            data: data,
        });
    }
}