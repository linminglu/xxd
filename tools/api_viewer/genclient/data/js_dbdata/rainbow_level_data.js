var rainbow_level_data = {
		/**
	 * 0 : id, int, 
	 * 1 : segment, smallint, 段数
	 * 2 : award_id, smallint, 奖励魂侍ID 
	 */

	Id : 0,
	Segment : 1,
	Award_id : 2,

	Each: function(cb) {
		for(var i = 0; i < this._list.length; i++) {
			cb(this._list[i]);
		}
	},

	_list: [
		[8 /*[0]*/, 1 /*[1]*/, 4 /*[2]*/],
		[1 /*[0]*/, 2 /*[1]*/, 17 /*[2]*/],
		[2 /*[0]*/, 3 /*[1]*/, 15 /*[2]*/],
		[3 /*[0]*/, 4 /*[1]*/, 5 /*[2]*/],
		[4 /*[0]*/, 5 /*[1]*/, 16 /*[2]*/],
		[5 /*[0]*/, 6 /*[1]*/, 8 /*[2]*/],
		[6 /*[0]*/, 7 /*[1]*/, 7 /*[2]*/],
		[7 /*[0]*/, 8 /*[1]*/, 9 /*[2]*/],
		[9 /*[0]*/, 9 /*[1]*/, 11 /*[2]*/]
	],
};
