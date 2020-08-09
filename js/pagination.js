var tableData = [
  {
    name: "Manju Mishra",
    channel: "Graphics Designing",
    phase: "I",
    sn: "1",
  },
  {
    name: "Ganga Pandey",
    channel: "Web Development",
    phase: "III",
    sn: "2",
  },
  {
    name: "Azita Baral",
    channel: "Graphics Designing",
    phase: "IV",
    sn: "3",
  },

  {
    name: "Swastika Shrestha",
    channel: "WordPress",
    phase: "III",
    sn: "4",
  },
  {
    name: "Alisha Gyawali",
    channel: "Cyber Security",
    phase: "IV",
    sn: "5",
  },
  {
    name: "Anjali Neupane",
    channel: "Cyber Security",
    phase: "IV",
    sn: "6",
  },
  {
    name: "Namuna Acharya",
    channel: "Graphics Designing",
    phase: "IV",
    sn: "7",
  },
  {
    name: "Shrijana Basnet",
    channel: "Web Development",
    phase: "III",
    sn: "8",
  },
  {
    name: "Ramesh Bhattari",
    channel: "Graphics Designing",
    phase: "I",
    sn: "9",
  },
  {
    name: "Nisha Budhathoki",
    channel: "Web Development",
    phase: "I",
    sn: "10",
  },
  {
    name: "Shristi Gyawali",
    channel: "Cyber Security",
    phase: "IV",
    sn: "11",
  },
  {
    name: "Kriti Malik",
    channel: "Graphics Designing",
    phase: "IV",
    sn: "12",
  },
  {
    name: "Shrijana Thapa",
    channel: "Web Development",
    phase: "III",
    sn: "13",
  },
  {
    name: "Aashis Khanal",
    channel: "Web Development",
    phase: "I",
    sn: "14",
  },
  {
    name: "Aashish Neupane",
    channel: "Cyber Security",
    phase: "I",
    sn: "15",
  },
  {
    name: "Jeshika Sapkota",
    channel: "Cyber Security",
    phase: "IV",
    sn: "16",
  },
  {
    name: "Suruchi Tanadan",
    channel: "Web Development",
    phase: "IV",
    sn: "17",
  },
  {
    name: "Alina Ghimire",
    channel: "Web Development",
    phase: "IV",
    sn: "18",
  },
  {
    name: "Mahima Poudel",
    channel: "Cyber Security",
    phase: "IV",
    sn: "19",
  },
  {
    name: "Sisam Gautam",
    channel: "Web Development",
    phase: "IV",
    sn: "20",
  },
];

/*
1 - Loop Through Array & Access each value
2 - Create Table Rows & append to table
*/

var state = {
  querySet: tableData,

  page: 1,
  rows: 5,
  window: 3,
};

buildTable();

function pagination(querySet, page, rows) {
  var trimStart = (page - 1) * rows;
  var trimEnd = trimStart + rows;

  var trimmedData = querySet.slice(trimStart, trimEnd);

  var pages = Math.round(querySet.length / rows);

  return {
    querySet: trimmedData,
    pages: pages,
  };
}

function pageButtons(pages) {
  var wrapper = document.getElementById("pagination-wrapper");

  wrapper.innerHTML = ``;
  console.log("Pages:", pages);

  var maxLeft = state.page - Math.floor(state.window / 2);
  var maxRight = state.page + Math.floor(state.window / 2);

  if (maxLeft < 1) {
    maxLeft = 1;
    maxRight = state.window;
  }

  if (maxRight > pages) {
    maxLeft = pages - (state.window - 1);

    if (maxLeft < 1) {
      maxLeft = 1;
    }
    maxRight = pages;
  }

  for (var page = maxLeft; page <= maxRight; page++) {
    wrapper.innerHTML += `<button value=${page} class="page btn btn-sm btn-info">${page}</button>`;
  }

  if (state.page != 1) {
    wrapper.innerHTML =
      `<button value=${1} class="page btn btn-sm btn-info">&#171; Previous</button>` +
      wrapper.innerHTML;
  }

  if (state.page != pages) {
    wrapper.innerHTML += `<button value=${pages} class="page btn btn-sm btn-info">Next &#187;</button>`;
  }

  $(".page").on("click", function () {
    $("#table-body").empty();

    state.page = Number($(this).val());

    buildTable();
  });
}

function buildTable() {
  var table = $("#table-body");

  var data = pagination(state.querySet, state.page, state.rows);
  var myList = data.querySet;

  for (var i = 1 in myList) {
    var row = `<tr>
              <td>${myList[i].sn}</td>
              <td>${myList[i].phase}</td>
              <td>${myList[i].name}</td>
              <td>${myList[i].channel}</td>
              `;
    table.append(row);
  }

  pageButtons(data.pages);
}
