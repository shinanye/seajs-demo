let lucky = new Lucky();
lucky.printTxt('#lucky');

function Lucky(){
    let _this = this;
    _this.printTxt = function(tags){
        $(tags).html('good lucky');
    }
}