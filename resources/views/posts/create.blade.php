<body>
    <div class="content" id="app">
        <div class="title m-b-md">
            Post
        </div>
        <post-create inline-template>
            <div>
            <form @submit.prevent="submitForm">
                <div class="form-group">
                    <label for="title">Post Title</label>
                    <input type="text" name="title" class="form-control" id="title" placeholder="Enter Post Title" v-model="formFields.title">
                </div>
        
                <div class="form-group">
                    <label for="description">Post Description</label>
                    <textarea name="description" class="form-control" v-model="formFields.description"></textarea>
                </div>
        
                <div class="form-group">
                    <label for="description">Picture</label>
                    <input type="file" name="picture" class="form-control-file" id="picture" @change="onFileChange">
                </div>
        
                <div class="form-group">
                    <input type="submit" class="btn btn-success" />
                </div>
            </form>
            </div>
        </post-create>
            </div>
    <script src="js/app.js"></script>
</body>