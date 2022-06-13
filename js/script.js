const app = new Vue( {
    el: '#root',
    data: {
        albums: [],
        loading: true,
    },
    created() {
        axios
          .get("http://localhost/php-ajax-dischi/props/server.php")
          .then((resp) => {
            this.albums = resp.data;
            this.loading = false;
          });
    },
}
);
