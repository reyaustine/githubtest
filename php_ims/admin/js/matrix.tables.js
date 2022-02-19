export default class MatrixTable {

	convert(table) {
		const array = this.createArray(table);
		const conversion = this.transpose(array);

		return this.createTable(conversion).outerHTML;
	}

	transpose(ary) {
		return Object.keys(ary[0]).map(c =>
			ary.map(r => r[c])
		);
	}

	createArray(table) {
		const array = [];
		const rowSpan = [];
		let columnCount = 0;
		[].forEach.call(table.querySelectorAll('tr'), (tr, i) => {
			const tdAry = [];
			const items = tr.querySelectorAll('td,th');
			const tdTh = Array.from(items);
			if (i === 0) {
				columnCount = items.length;
			}
			for (let k = 0; k < columnCount; k++) {
				if (parseInt(rowSpan[k], 10) > 0) {
					tdAry[k] = 'empty';
					rowSpan[k]--;
				} else {
					const item = tdTh.shift();
					const colSpan = item.getAttribute('colspan');
					rowSpan[k] = item.getAttribute('rowspan');
					if (colSpan) {
						item.removeAttribute('colspan');
						item.setAttribute('rowspan', colSpan);
					}
					if (rowSpan[k]) {
						item.removeAttribute('rowspan');
						item.setAttribute('colspan', rowSpan[k]);
					}
					tdAry[k] = item.cloneNode(true);
					if (parseInt(colSpan, 10) > 1) {
						for (let j = 1; j < colSpan; j++) {
							tdAry[k + j] = 'empty';
							k++;
						}
					}
				}
			}
			array[i] = tdAry;
		});
		return array;
	}

	createTable(array) {
		const table = document.createElement('table');
		array.forEach((items) => {
			const tr = document.createElement('tr');
			items.forEach((item) => {
				if (item !== 'empty') {
					tr.appendChild(item);
				}
			});
			table.appendChild(tr);
		});
		return table;
	}
}
