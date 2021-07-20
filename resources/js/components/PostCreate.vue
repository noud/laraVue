<template>
</template>

<script>
export default {
    name: 'post-create',
    data(){
        return{
            formFields: {
                title: null,
                description: null,
                picture: null
            },
        }
    },
    onFileChange(event){
        this.formFields.picture = event.target.files[0];
    },
    submitForm(){
        let formData = new FormData();

        formData.append("picture", this.formFields.picture);
        formData.append("title", this.formFields.title);
        formData.append("description", this.formFields.description);

        axios.post('/posts', formData1)
                .then((res) => {
                    console.log(res);
                })
                .catch((error) => {
                    console.log(error);
        });
    },
}
</script>
