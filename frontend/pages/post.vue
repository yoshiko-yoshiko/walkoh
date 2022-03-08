<template>
    <div>
        <p>コメント:<input type="text" v-model="title" /></p>
        <p><input type="file" @change="confirmImage" v-if="view" /></p>

        <!-- 確認用画像 -->
        <p v-if="confirmedImage">
            <img class="img" :src="confirmedImage" />
        </p>

        <p>{{ message }}</p>

        <p>
            <button @click="uploadImage">アップロード</button>
        </p>

        <!-- 画像一覧 -->
        <table border="1">
            <tr>
                <th>title</th>
                <th>画像</th>
            </tr>
            <tr v-for="image in images" :key="image.id">
                <td>{{ title }}</td>
                <td><img class="img" :src="`${}`" /></td>
            </tr>
        </table>
    </div>
</template>

<script>

export default {
    data() {
        return {
            message: "",
            file: "",
            title: "",
            view: true,
            images: {},
            confirmedImage: ""
        };
    },
    created: function() {
        this.getImage();
    },
    methods: {
        getImage() {
                this.$axios.post("/Users/ImageApi")
                .then(response => {
                    this.images = response.data;
                })
                .catch(e => {
                    this.message = e;
                });
        },
        confirmImage(e) {
            this.message = "";
            this.file = e.target.files[0];
            if (!this.file.type.match("image.*")) {
                this.message = "画像ファイルを選択して下さい";
                this.confirmedImage = "";
                return;
            }
            this.createImage(this.file);
        },
        createImage(file) {
            let reader = new FileReader();
            reader.readAsDataURL(file);
            reader.onload = e => {
                this.confirmedImage = e.target.result;
            };
        },
        uploadImage() {
            let data = new FormData();
            data.append("file", this.file);
            data.append("title", this.title);

                this.$axios.post("/Users/ImageApi", data)
                .then(response => {
                    this.getImage();
                    this.message = response.data.success;
                    this.confirmedImage = "";
                    this.title = "";
                    this.file = "";

                    //ファイルを選択のクリア
                    this.view = false;
                    this.$nextTick(function() {
                        this.view = true;
                    });
                })
                .catch(e => {
                    this.message = e.response.data.errors;
                });

        }
    }
};
</script>