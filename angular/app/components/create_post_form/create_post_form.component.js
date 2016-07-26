class CreatePostFormController{
    constructor(API, ToastService, $scope){
        'ngInject';
      
        this.API = API;
        this.ToastService = ToastService;
        this.scope = $scope;
        this.scope.posts = [];
    }
  
   submit(){
      var data = {
        name: this.name,
        topic: this.topic,
      };
      
       this.API.all('posts').post(data).then((response) => {
         this.ToastService.show('Post added successfully');
         this.scope.posts.push(data);
       });
    }

    $onInit(){
        this.API.all('posts').get('').then((response) => {
            this.scope.posts = response.data;
        });

    }

    getPosts(){
        //console.log("Wyświetlanie posts");
        return this.scope.posts;
    }



}

export const CreatePostFormComponent = {
    templateUrl: './views/app/components/create_post_form/create_post_form.component.html',
    controller: CreatePostFormController,
    controllerAs: 'vm',
    bindings: {}
}