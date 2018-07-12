# seajs插件的使用案例
在用到seajs的页面中用script标签应用seajs文件，在引入的html文件中t添加一段配置代码：
<h3>在页面中加载模块</h3>
```
// seajs 的简单配置
seajs.config({
  base: "../sea-modules/",
  alias: {
    "jquery": "jquery/jquery/1.10.1/jquery.js"
  }
})

// 加载入口模块
seajs.use("../static/hello/src/main")
```

>特别注意：<br>
在script中的配置文件是对于html所处的位置而言

<h3>模块代码</h3>
在html页面中引入js文件中的使用方法：
1.模块代码(index.html的static/index/main.js添加如下代码)
```
define(function(require,exports,module) {
    // var title= document.getElementById('title');
    // title.innerHTML = "yes it works";
    var changeText = require('../change_text.js');
    var title = document.getElementById('title');
    title.innerHTML = changeText.text;
})
```
2. jquery代码(lucky的static/lucky/main.js添加如下代码)
    let lucky = new Lucky();
    lucky.printTxt('#lucky');

    function Lucky(){
        let _this = this;
        _this.printTxt = function(tags){
            $(tags).html('good lucky');
        }
    }

<h3>目录结构</h3>
examples/
  |-- modules     存放 seajs、jquery 等文件，这也是模块的部署目录
  |-- static          存放各个项目的 js、css 文件
  |     |-- hello
  |     `--  lucky
  `-- app             存放 html 等文件
        |-- index.html
        `-- lucky.html


