// the fromTo() method
var tween = KUTE.fromTo('#rectangle', {path: '#rectangle' }, { path: '#star' }).start();
// OR
// the to() method will take the path's d attribute value and use it as start value
var tween = KUTE.to('#rectangle', { path: '#star' }).start();
// OR
// simply pass in a valid path string without the need to have two paths in your SVG
var tween = KUTE.to('#rectangle', { path: 'M301.113,12.011l99.25,179.996l201.864,38.778L461.706,380.808l25.508,203.958l-186.101-87.287L115.01,584.766l25.507-203.958L0,230.785l201.86-38.778L301.113,12.011' }).start();