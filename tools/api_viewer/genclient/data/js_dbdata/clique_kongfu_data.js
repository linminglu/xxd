var clique_kongfu_data = {
		/**
	 * 0 : id, int, 标识ID
	 * 1 : building, int, 所属建筑
	 * 2 : name, varchar, 武功名称
	 * 3 : require_building_level, smallint, 要求建筑等级
	 * 4 : attrib_type, tinyint, 属性类型
	 * 5 : attrib_value, int, 每级加成属性 
	 */

	Id : 0,
	Building : 1,
	Name : 2,
	Require_building_level : 3,
	Attrib_type : 4,
	Attrib_value : 5,

	Each: function(cb) {
		for(var i = 0; i < this._list.length; i++) {
			cb(this._list[i]);
		}
	},

	_list: [
		[1 /*[0]*/, 2 /*[1]*/, "吐纳心经" /*[2]*/, 1 /*[3]*/, 1 /*[4]*/, 10 /*[5]*/],
		[2 /*[0]*/, 2 /*[1]*/, "天地心法" /*[2]*/, 4 /*[3]*/, 1 /*[4]*/, 20 /*[5]*/],
		[3 /*[0]*/, 2 /*[1]*/, "无想转生" /*[2]*/, 8 /*[3]*/, 1 /*[4]*/, 30 /*[5]*/],
		[4 /*[0]*/, 2 /*[1]*/, "易筋经" /*[2]*/, 12 /*[3]*/, 1 /*[4]*/, 40 /*[5]*/],
		[5 /*[0]*/, 3 /*[1]*/, "凌云诀" /*[2]*/, 1 /*[3]*/, 2 /*[4]*/, 2 /*[5]*/],
		[6 /*[0]*/, 3 /*[1]*/, "混元劲" /*[2]*/, 4 /*[3]*/, 2 /*[4]*/, 4 /*[5]*/],
		[7 /*[0]*/, 3 /*[1]*/, "裂天劲" /*[2]*/, 8 /*[3]*/, 2 /*[4]*/, 6 /*[5]*/],
		[8 /*[0]*/, 3 /*[1]*/, "剑圣心法" /*[2]*/, 12 /*[3]*/, 2 /*[4]*/, 8 /*[5]*/],
		[9 /*[0]*/, 4 /*[1]*/, "磐石心法" /*[2]*/, 1 /*[3]*/, 3 /*[4]*/, 1 /*[5]*/],
		[10 /*[0]*/, 4 /*[1]*/, "天罡护体" /*[2]*/, 4 /*[3]*/, 3 /*[4]*/, 2 /*[5]*/],
		[11 /*[0]*/, 4 /*[1]*/, "金刚心经" /*[2]*/, 8 /*[3]*/, 3 /*[4]*/, 3 /*[5]*/],
		[12 /*[0]*/, 4 /*[1]*/, "九转金身" /*[2]*/, 12 /*[3]*/, 3 /*[4]*/, 4 /*[5]*/]
	],
};
