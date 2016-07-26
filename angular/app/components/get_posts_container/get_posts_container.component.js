class GetPostsContainerController{
    constructor(API, ToastService, $scope){
        'ngInject'; 
        this.API = API;
        this.ToastService = ToastService;
        this.scope = $scope;
        this.scope.posts = [];
       // $onInit();
    }

    $onInit(){

        //console.log("Wyświetlanie posts");
        this.API.all('posts').get('').then((response) => {
            this.scope.posts = response.data;
            //console.log(response.data);
        });
        //console.log("Wyświetlanie posts2");

    }

    getPosts(){
        //console.log("Wyświetlanie posts");

        return this.scope.posts;
    }
}

export const GetPostsContainerComponent = {
    templateUrl: './views/app/components/get_posts_container/get_posts_container.component.html',
    controller: GetPostsContainerController,
    controllerAs: 'vm',
    bindings: {}
}
