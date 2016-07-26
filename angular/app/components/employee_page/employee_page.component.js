class EmployeePageController{
    constructor($scope, API, ToastService){
        'ngInject';

        this.API = API;
        this.$scope = $scope;
        this.ToastService = ToastService;
        //
    }

    $onInit(){
        this.name = '';
        this.email = '';
    }
    searchDB(){

    }
    getEmployeeList(){

    }
    edit(id){

    }
    remove(employee,$index){

    }
    saveAdd(){
        var employee = {
            name: this.name,
            email: this.email,
        };

        console.log(employee);
       this.API.all('CreateEmployeeCard').post(employee).then((response) => {
         this.ToastService.show('Employee added successfully');
         //this.scope.employeeCards.push(employee);
         $(".modal").modal("hide");
       });
        // dataFactory.httpRequest('items','POST',{},$scope.form).then(function(data) {
        //   $scope.data.push(data);
        //   $(".modal").modal("hide");
        // });

    }
    saveEdit(){

    }
}

export const EmployeePageComponent = {
    templateUrl: './views/app/components/employee_page/employee_page.component.html',
    controller: EmployeePageController,
    controllerAs: 'vm',
    bindings: {}
}
