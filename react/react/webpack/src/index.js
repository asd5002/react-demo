// 所有依赖的模块都需要通过require注入到当前文件
var React = require("react"),
	ReactDOM = require("react-dom"),
	// react模块需要通过相对路径来作为参数
	Header = require("./componentHeader.js"),
	Section = require("./componentSection.js"),
	Footer = require("./componentFooter.js");
var Main = React.createClass({
	render: function() {
		return (
			<div>
				<Header/>
				<Section/>
				<Footer/>
			</div>
		);
	}
})

ReactDOM.render(<Main/>,document.getElementById('main'));