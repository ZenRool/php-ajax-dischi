<header>
    <div class="d-flex align-items-center h-100 w-100 space-between">
        <div class="h-75 ml-1">
            <img src="./img/logo.png" alt="logo" />
        </div>
        <form class="mr-1 d-flex align-items-center">
            <select
                name="genre"
                id="genre"
                class="mr-1"
                v-model="genre"
                @change="search"
            >
                <option value="All">All</option>
                <option value="Pop">Pop</option>
                <option value="Rock">Rock</option>
                <option value="Metal">Metal</option>
                <option value="Jazz">Jazz</option>
            </select>

        </form>
    </div>
</header>