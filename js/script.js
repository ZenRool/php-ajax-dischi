const app = new Vue( {
    el: '#root',
    data: {
        albums: [],
        loading: true,
        genre: "",
    },
    created() {
        this.search();
    },
    methods: {
        search() {

            axios
            .get("http://127.0.0.1/php-ajax-dischi/props/server.php", {
                params: {
                    genre: this.genre,
                }
            })
            .then((resp) => {
              this.albums = resp.data;
              this.loading = false;
            });
      }
    }

}
);
