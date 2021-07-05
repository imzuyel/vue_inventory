<template>
  <div>
    <div>
      <div class="row">
        <div class="col-12 col-lg-3">
          <div class="card radius-15 bg-voilet">
            <div class="card-body">
              <div class="d-flex align-items-center">
                <div>
                  <h2 class="mb-0 text-white">
                    {{ todaysell }} <i class="bx bxs-up-arrow-alt font-14 text-white"></i>
                  </h2>
                </div>
                <div class="ml-auto font-35 text-white">
                  <i class="bx bx-cart-alt"></i>
                </div>
              </div>
              <div class="d-flex align-items-center">
                <div>
                  <p class="mb-0 text-white">Todays Sell</p>
                </div>
                <div class="ml-auto font-14 text-white"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-3">
          <div class="card radius-15 bg-primary-blue">
            <div class="card-body">
              <div class="d-flex align-items-center">
                <div>
                  <h2 class="mb-0 text-white">
                    {{ todaypaid }}
                    <i class="bx bxs-down-arrow-alt font-14 text-white"></i>
                  </h2>
                </div>
                <div class="ml-auto font-35 text-white">
                  <i class="bx bx-dollar"></i>
                </div>
              </div>
              <div class="d-flex align-items-center">
                <div>
                  <p class="mb-0 text-white">Todays paid</p>
                </div>
                <div class="ml-auto font-14 text-white"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-3">
          <div class="card radius-15 bg-rose">
            <div class="card-body">
              <div class="d-flex align-items-center">
                <div>
                  <h2 class="mb-0 text-white">
                    98 <i class="bx bxs-up-arrow-alt font-14 text-white"></i>
                  </h2>
                </div>
                <div class="ml-auto font-35 text-white">
                  <i class="bx bx-money"></i>
                </div>
              </div>
              <div class="d-flex align-items-center">
                <div>
                  <p class="mb-0 text-white">Todays Due</p>
                </div>
                <div class="ml-auto font-14 text-white">{{ todaydue }}</div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-3">
          <div class="card radius-15 bg-sunset">
            <div class="card-body">
              <div class="d-flex align-items-center">
                <div>
                  <h2 class="mb-0 text-white">
                    208 <i class="bx bxs-up-arrow-alt font-14 text-white"></i>
                  </h2>
                </div>
                <div class="ml-auto font-35 text-white"><i class="bx bx-user"></i></div>
              </div>
              <div class="d-flex align-items-center">
                <div>
                  <p class="mb-0 text-white">New Custommer</p>
                </div>
                <div class="ml-auto font-14 text-white">+</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="card radius-15">
        <div class="card-header border-bottom-0">
          <div class="d-lg-flex align-items-center">
            <div>
              <h5 class="mb-2 mb-lg-0">Sales Update</h5>
            </div>
            <div class="ml-lg-auto mb-2 mb-lg-0">
              <div class="btn-group-round">
                <div class="btn-group">
                  <button type="button" class="btn btn-white">Daiiy</button>
                  <button type="button" class="btn btn-white">Weekly</button>
                  <button type="button" class="btn btn-white">Monthly</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card-body" style="position: relative">
          <div id="chart1" style="min-height: 355px">
            <div
              id="apexchartsjahh5dru"
              class="apexcharts-canvas apexchartsjahh5dru apexcharts-theme-light"
              style="width: 987px; height: 340px"
            >
              <svg
                id="SvgjsSvg4252"
                width="987"
                height="340"
                xmlns="http://www.w3.org/2000/svg"
                version="1.1"
                xmlns:xlink="http://www.w3.org/1999/xlink"
                xmlns:svgjs="http://svgjs.com/svgjs"
                class="apexcharts-svg"
                xmlns:data="ApexChartsNS"
                transform="translate(0, 0)"
                style="background: transparent"
              >
                <foreignObject x="0" y="0" width="987" height="340"
                  ><div
                    class="apexcharts-legend apexcharts-align-left position-top"
                    xmlns="http://www.w3.org/1999/xhtml"
                    style="right: 0px; position: absolute; left: -5px; top: 0px"
                  >
                    <div
                      class="apexcharts-legend-series"
                      rel="1"
                      data:collapsed="false"
                      style="margin: 0px 5px"
                    >
                      <span
                        class="apexcharts-legend-marker"
                        rel="1"
                        data:collapsed="false"
                        style="
                          background: rgb(55, 125, 255);
                          color: rgb(55, 125, 255);
                          height: 12px;
                          width: 12px;
                          left: 0px;
                          top: 0px;
                          border-width: 0px;
                          border-color: rgb(255, 255, 255);
                          border-radius: 12px;
                        "
                      ></span
                      ><span
                        class="apexcharts-legend-text"
                        rel="1"
                        i="0"
                        data:default-text="Income"
                        data:collapsed="false"
                        style="
                          color: rgb(155, 167, 178);
                          font-size: 12px;
                          font-weight: 400;
                          font-family: Helvetica, Arial, sans-serif;
                        "
                        >Income</span
                      >
                    </div>
                    <div
                      class="apexcharts-legend-series"
                      rel="2"
                      data:collapsed="false"
                      style="margin: 0px 5px"
                    >
                      <span
                        class="apexcharts-legend-marker"
                        rel="2"
                        data:collapsed="false"
                        style="
                          background: rgb(0, 201, 219);
                          color: rgb(0, 201, 219);
                          height: 12px;
                          width: 12px;
                          left: 0px;
                          top: 0px;
                          border-width: 0px;
                          border-color: rgb(255, 255, 255);
                          border-radius: 12px;
                        "
                      ></span
                      ><span
                        class="apexcharts-legend-text"
                        rel="2"
                        i="1"
                        data:default-text="Expenses"
                        data:collapsed="false"
                        style="
                          color: rgb(155, 167, 178);
                          font-size: 12px;
                          font-weight: 400;
                          font-family: Helvetica, Arial, sans-serif;
                        "
                        >Expenses</span
                      >
                    </div>
                  </div>
                </foreignObject>
                <g
                  id="SvgjsG4254"
                  class="apexcharts-inner apexcharts-graphical"
                  transform="translate(51.78125, 46)"
                >
                  <defs id="SvgjsDefs4253">
                    <clipPath id="gridRectMaskjahh5dru">
                      <rect
                        id="SvgjsRect4260"
                        width="919.2453125"
                        height="258.648"
                        x="-3.15"
                        y="-1.15"
                        rx="0"
                        ry="0"
                        opacity="1"
                        stroke-width="0"
                        stroke="none"
                        stroke-dasharray="0"
                        fill="#fff"
                      ></rect>
                    </clipPath>
                    <clipPath id="gridRectMarkerMaskjahh5dru">
                      <rect
                        id="SvgjsRect4261"
                        width="916.9453125"
                        height="260.348"
                        x="-2"
                        y="-2"
                        rx="0"
                        ry="0"
                        opacity="1"
                        stroke-width="0"
                        stroke="none"
                        stroke-dasharray="0"
                        fill="#fff"
                      ></rect>
                    </clipPath>
                    <linearGradient
                      id="SvgjsLinearGradient4267"
                      x1="0"
                      y1="0"
                      x2="0"
                      y2="1"
                    >
                      <stop
                        id="SvgjsStop4268"
                        stop-opacity="0.4"
                        stop-color="rgba(55,125,255,0.4)"
                        offset="0"
                      ></stop>
                      <stop
                        id="SvgjsStop4269"
                        stop-opacity="0.1"
                        stop-color="rgba(55,125,255,0.1)"
                        offset="1"
                      ></stop>
                      <stop
                        id="SvgjsStop4270"
                        stop-opacity="0.1"
                        stop-color="rgba(55,125,255,0.1)"
                        offset="1"
                      ></stop>
                    </linearGradient>
                    <linearGradient
                      id="SvgjsLinearGradient4276"
                      x1="0"
                      y1="0"
                      x2="0"
                      y2="1"
                    >
                      <stop
                        id="SvgjsStop4277"
                        stop-opacity="0.4"
                        stop-color="rgba(0,201,219,0.4)"
                        offset="0"
                      ></stop>
                      <stop
                        id="SvgjsStop4278"
                        stop-opacity="0.1"
                        stop-color="rgba(0,201,219,0.1)"
                        offset="1"
                      ></stop>
                      <stop
                        id="SvgjsStop4279"
                        stop-opacity="0.1"
                        stop-color="rgba(0,201,219,0.1)"
                        offset="1"
                      ></stop>
                    </linearGradient>
                  </defs>
                  <line
                    id="SvgjsLine4259"
                    x1="0"
                    y1="0"
                    x2="0"
                    y2="256.348"
                    stroke="#b6b6b6"
                    stroke-dasharray="3"
                    class="apexcharts-xcrosshairs"
                    x="0"
                    y="0"
                    width="1"
                    height="256.348"
                    fill="#b1b9c4"
                    filter="none"
                    fill-opacity="0.9"
                    stroke-width="1"
                  ></line>
                  <g id="SvgjsG4282" class="apexcharts-xaxis" transform="translate(0, 0)">
                    <g
                      id="SvgjsG4283"
                      class="apexcharts-xaxis-texts-g"
                      transform="translate(0, -4)"
                    >
                      <text
                        id="SvgjsText4285"
                        font-family="Helvetica, Arial, sans-serif"
                        x="0"
                        y="285.348"
                        text-anchor="middle"
                        dominant-baseline="auto"
                        font-size="12px"
                        font-weight="400"
                        fill="#9ba7b2"
                        class="apexcharts-text apexcharts-xaxis-label"
                        style="font-family: Helvetica, Arial, sans-serif"
                      >
                        <tspan id="SvgjsTspan4286">Jan</tspan>
                        <title>Jan</title>
                      </text>
                      <text
                        id="SvgjsText4288"
                        font-family="Helvetica, Arial, sans-serif"
                        x="82.9950284090909"
                        y="285.348"
                        text-anchor="middle"
                        dominant-baseline="auto"
                        font-size="12px"
                        font-weight="400"
                        fill="#9ba7b2"
                        class="apexcharts-text apexcharts-xaxis-label"
                        style="font-family: Helvetica, Arial, sans-serif"
                      >
                        <tspan id="SvgjsTspan4289">Feb</tspan>
                        <title>Feb</title>
                      </text>
                      <text
                        id="SvgjsText4291"
                        font-family="Helvetica, Arial, sans-serif"
                        x="165.9900568181818"
                        y="285.348"
                        text-anchor="middle"
                        dominant-baseline="auto"
                        font-size="12px"
                        font-weight="400"
                        fill="#9ba7b2"
                        class="apexcharts-text apexcharts-xaxis-label"
                        style="font-family: Helvetica, Arial, sans-serif"
                      >
                        <tspan id="SvgjsTspan4292">Mar</tspan>
                        <title>Mar</title>
                      </text>
                      <text
                        id="SvgjsText4294"
                        font-family="Helvetica, Arial, sans-serif"
                        x="248.9850852272727"
                        y="285.348"
                        text-anchor="middle"
                        dominant-baseline="auto"
                        font-size="12px"
                        font-weight="400"
                        fill="#9ba7b2"
                        class="apexcharts-text apexcharts-xaxis-label"
                        style="font-family: Helvetica, Arial, sans-serif"
                      >
                        <tspan id="SvgjsTspan4295">Apr</tspan>
                        <title>Apr</title>
                      </text>
                      <text
                        id="SvgjsText4297"
                        font-family="Helvetica, Arial, sans-serif"
                        x="331.98011363636357"
                        y="285.348"
                        text-anchor="middle"
                        dominant-baseline="auto"
                        font-size="12px"
                        font-weight="400"
                        fill="#9ba7b2"
                        class="apexcharts-text apexcharts-xaxis-label"
                        style="font-family: Helvetica, Arial, sans-serif"
                      >
                        <tspan id="SvgjsTspan4298">May</tspan>
                        <title>May</title>
                      </text>
                      <text
                        id="SvgjsText4300"
                        font-family="Helvetica, Arial, sans-serif"
                        x="414.97514204545445"
                        y="285.348"
                        text-anchor="middle"
                        dominant-baseline="auto"
                        font-size="12px"
                        font-weight="400"
                        fill="#9ba7b2"
                        class="apexcharts-text apexcharts-xaxis-label"
                        style="font-family: Helvetica, Arial, sans-serif"
                      >
                        <tspan id="SvgjsTspan4301">Jun</tspan>
                        <title>Jun</title>
                      </text>
                      <text
                        id="SvgjsText4303"
                        font-family="Helvetica, Arial, sans-serif"
                        x="497.9701704545453"
                        y="285.348"
                        text-anchor="middle"
                        dominant-baseline="auto"
                        font-size="12px"
                        font-weight="400"
                        fill="#9ba7b2"
                        class="apexcharts-text apexcharts-xaxis-label"
                        style="font-family: Helvetica, Arial, sans-serif"
                      >
                        <tspan id="SvgjsTspan4304">Jul</tspan>
                        <title>Jul</title>
                      </text>
                      <text
                        id="SvgjsText4306"
                        font-family="Helvetica, Arial, sans-serif"
                        x="580.9651988636361"
                        y="285.348"
                        text-anchor="middle"
                        dominant-baseline="auto"
                        font-size="12px"
                        font-weight="400"
                        fill="#9ba7b2"
                        class="apexcharts-text apexcharts-xaxis-label"
                        style="font-family: Helvetica, Arial, sans-serif"
                      >
                        <tspan id="SvgjsTspan4307">Aug</tspan>
                        <title>Aug</title>
                      </text>
                      <text
                        id="SvgjsText4309"
                        font-family="Helvetica, Arial, sans-serif"
                        x="663.960227272727"
                        y="285.348"
                        text-anchor="middle"
                        dominant-baseline="auto"
                        font-size="12px"
                        font-weight="400"
                        fill="#9ba7b2"
                        class="apexcharts-text apexcharts-xaxis-label"
                        style="font-family: Helvetica, Arial, sans-serif"
                      >
                        <tspan id="SvgjsTspan4310">Sep</tspan>
                        <title>Sep</title>
                      </text>
                      <text
                        id="SvgjsText4312"
                        font-family="Helvetica, Arial, sans-serif"
                        x="746.9552556818179"
                        y="285.348"
                        text-anchor="middle"
                        dominant-baseline="auto"
                        font-size="12px"
                        font-weight="400"
                        fill="#9ba7b2"
                        class="apexcharts-text apexcharts-xaxis-label"
                        style="font-family: Helvetica, Arial, sans-serif"
                      >
                        <tspan id="SvgjsTspan4313">Oct</tspan>
                        <title>Oct</title>
                      </text>
                      <text
                        id="SvgjsText4315"
                        font-family="Helvetica, Arial, sans-serif"
                        x="829.9502840909088"
                        y="285.348"
                        text-anchor="middle"
                        dominant-baseline="auto"
                        font-size="12px"
                        font-weight="400"
                        fill="#9ba7b2"
                        class="apexcharts-text apexcharts-xaxis-label"
                        style="font-family: Helvetica, Arial, sans-serif"
                      >
                        <tspan id="SvgjsTspan4316">Nov</tspan>
                        <title>Nov</title>
                      </text>
                      <text
                        id="SvgjsText4318"
                        font-family="Helvetica, Arial, sans-serif"
                        x="912.9453124999997"
                        y="285.348"
                        text-anchor="middle"
                        dominant-baseline="auto"
                        font-size="12px"
                        font-weight="400"
                        fill="#9ba7b2"
                        class="apexcharts-text apexcharts-xaxis-label"
                        style="font-family: Helvetica, Arial, sans-serif"
                      >
                        <tspan id="SvgjsTspan4319">Dec</tspan>
                        <title>Dec</title>
                      </text>
                    </g>
                    <line
                      id="SvgjsLine4320"
                      x1="0"
                      y1="257.348"
                      x2="912.9453125"
                      y2="257.348"
                      stroke="#e0e0e0"
                      stroke-dasharray="0"
                      stroke-width="1"
                    ></line>
                  </g>
                  <g id="SvgjsG4335" class="apexcharts-grid">
                    <g id="SvgjsG4336" class="apexcharts-gridlines-horizontal">
                      <line
                        id="SvgjsLine4350"
                        x1="0"
                        y1="0"
                        x2="912.9453125"
                        y2="0"
                        stroke="#f8f8f8"
                        stroke-dasharray="5"
                        class="apexcharts-gridline"
                      ></line>
                      <line
                        id="SvgjsLine4351"
                        x1="0"
                        y1="51.269600000000004"
                        x2="912.9453125"
                        y2="51.269600000000004"
                        stroke="#f8f8f8"
                        stroke-dasharray="5"
                        class="apexcharts-gridline"
                      ></line>
                      <line
                        id="SvgjsLine4352"
                        x1="0"
                        y1="102.53920000000001"
                        x2="912.9453125"
                        y2="102.53920000000001"
                        stroke="#f8f8f8"
                        stroke-dasharray="5"
                        class="apexcharts-gridline"
                      ></line>
                      <line
                        id="SvgjsLine4353"
                        x1="0"
                        y1="153.80880000000002"
                        x2="912.9453125"
                        y2="153.80880000000002"
                        stroke="#f8f8f8"
                        stroke-dasharray="5"
                        class="apexcharts-gridline"
                      ></line>
                      <line
                        id="SvgjsLine4354"
                        x1="0"
                        y1="205.07840000000002"
                        x2="912.9453125"
                        y2="205.07840000000002"
                        stroke="#f8f8f8"
                        stroke-dasharray="5"
                        class="apexcharts-gridline"
                      ></line>
                      <line
                        id="SvgjsLine4355"
                        x1="0"
                        y1="256.348"
                        x2="912.9453125"
                        y2="256.348"
                        stroke="#f8f8f8"
                        stroke-dasharray="5"
                        class="apexcharts-gridline"
                      ></line>
                    </g>
                    <g id="SvgjsG4337" class="apexcharts-gridlines-vertical"></g>
                    <line
                      id="SvgjsLine4338"
                      x1="0"
                      y1="257.348"
                      x2="0"
                      y2="263.348"
                      stroke="#e0e0e0"
                      stroke-dasharray="0"
                      class="apexcharts-xaxis-tick"
                    ></line>
                    <line
                      id="SvgjsLine4339"
                      x1="82.9950284090909"
                      y1="257.348"
                      x2="82.9950284090909"
                      y2="263.348"
                      stroke="#e0e0e0"
                      stroke-dasharray="0"
                      class="apexcharts-xaxis-tick"
                    ></line>
                    <line
                      id="SvgjsLine4340"
                      x1="165.9900568181818"
                      y1="257.348"
                      x2="165.9900568181818"
                      y2="263.348"
                      stroke="#e0e0e0"
                      stroke-dasharray="0"
                      class="apexcharts-xaxis-tick"
                    ></line>
                    <line
                      id="SvgjsLine4341"
                      x1="248.98508522727272"
                      y1="257.348"
                      x2="248.98508522727272"
                      y2="263.348"
                      stroke="#e0e0e0"
                      stroke-dasharray="0"
                      class="apexcharts-xaxis-tick"
                    ></line>
                    <line
                      id="SvgjsLine4342"
                      x1="331.9801136363636"
                      y1="257.348"
                      x2="331.9801136363636"
                      y2="263.348"
                      stroke="#e0e0e0"
                      stroke-dasharray="0"
                      class="apexcharts-xaxis-tick"
                    ></line>
                    <line
                      id="SvgjsLine4343"
                      x1="414.9751420454545"
                      y1="257.348"
                      x2="414.9751420454545"
                      y2="263.348"
                      stroke="#e0e0e0"
                      stroke-dasharray="0"
                      class="apexcharts-xaxis-tick"
                    ></line>
                    <line
                      id="SvgjsLine4344"
                      x1="497.9701704545454"
                      y1="257.348"
                      x2="497.9701704545454"
                      y2="263.348"
                      stroke="#e0e0e0"
                      stroke-dasharray="0"
                      class="apexcharts-xaxis-tick"
                    ></line>
                    <line
                      id="SvgjsLine4345"
                      x1="580.9651988636363"
                      y1="257.348"
                      x2="580.9651988636363"
                      y2="263.348"
                      stroke="#e0e0e0"
                      stroke-dasharray="0"
                      class="apexcharts-xaxis-tick"
                    ></line>
                    <line
                      id="SvgjsLine4346"
                      x1="663.9602272727271"
                      y1="257.348"
                      x2="663.9602272727271"
                      y2="263.348"
                      stroke="#e0e0e0"
                      stroke-dasharray="0"
                      class="apexcharts-xaxis-tick"
                    ></line>
                    <line
                      id="SvgjsLine4347"
                      x1="746.955255681818"
                      y1="257.348"
                      x2="746.955255681818"
                      y2="263.348"
                      stroke="#e0e0e0"
                      stroke-dasharray="0"
                      class="apexcharts-xaxis-tick"
                    ></line>
                    <line
                      id="SvgjsLine4348"
                      x1="829.9502840909089"
                      y1="257.348"
                      x2="829.9502840909089"
                      y2="263.348"
                      stroke="#e0e0e0"
                      stroke-dasharray="0"
                      class="apexcharts-xaxis-tick"
                    ></line>
                    <line
                      id="SvgjsLine4349"
                      x1="912.9453124999998"
                      y1="257.348"
                      x2="912.9453124999998"
                      y2="263.348"
                      stroke="#e0e0e0"
                      stroke-dasharray="0"
                      class="apexcharts-xaxis-tick"
                    ></line>
                    <line
                      id="SvgjsLine4357"
                      x1="0"
                      y1="256.348"
                      x2="912.9453125"
                      y2="256.348"
                      stroke="transparent"
                      stroke-dasharray="0"
                    ></line>
                    <line
                      id="SvgjsLine4356"
                      x1="0"
                      y1="1"
                      x2="0"
                      y2="256.348"
                      stroke="transparent"
                      stroke-dasharray="0"
                    ></line>
                  </g>
                  <g
                    id="SvgjsG4263"
                    class="apexcharts-area-series apexcharts-plot-series"
                  >
                    <g
                      id="SvgjsG4273"
                      class="apexcharts-series"
                      seriesName="Expenses"
                      data:longestSeries="true"
                      rel="2"
                      data:realIndex="1"
                    >
                      <path
                        id="SvgjsPath4280"
                        d="M 0 256.348L 0 187.13404000000003C 29.048259943181815 187.13404000000003 53.94676846590909 158.93576000000002 82.9950284090909 158.93576000000002C 112.04328835227273 158.93576000000002 136.941796875 102.5392 165.9900568181818 102.5392C 195.03831676136363 102.5392 219.9368252840909 58.96003999999999 248.98508522727272 58.96003999999999C 278.03334517045454 58.96003999999999 302.93185369318184 153.80880000000002 331.9801136363636 153.80880000000002C 361.0283735795454 153.80880000000002 385.9268821022727 128.174 414.9751420454545 128.174C 444.02340198863635 128.174 468.9219105113636 130.73748 497.97017045454544 130.73748C 527.0184303977272 130.73748 551.9169389204545 182.00708000000003 580.9651988636364 182.00708000000003C 610.0134588068182 182.00708000000003 634.9119673295454 148.68184000000002 663.9602272727273 148.68184000000002C 693.0084872159091 148.68184000000002 717.9069957386363 187.13404000000003 746.9552556818181 187.13404000000003C 776.003515625 187.13404000000003 800.9020241477272 148.68184000000002 829.950284090909 148.68184000000002C 858.9985440340909 148.68184000000002 883.8970525568182 128.174 912.9453125 128.174C 912.9453125 128.174 912.9453125 128.174 912.9453125 256.348M 912.9453125 128.174z"
                        fill="url(#SvgjsLinearGradient4276)"
                        fill-opacity="1"
                        stroke-opacity="1"
                        stroke-linecap="butt"
                        stroke-width="0"
                        stroke-dasharray="0"
                        class="apexcharts-area"
                        index="1"
                        clip-path="url(#gridRectMaskjahh5dru)"
                        pathTo="M 0 256.348L 0 187.13404000000003C 29.048259943181815 187.13404000000003 53.94676846590909 158.93576000000002 82.9950284090909 158.93576000000002C 112.04328835227273 158.93576000000002 136.941796875 102.5392 165.9900568181818 102.5392C 195.03831676136363 102.5392 219.9368252840909 58.96003999999999 248.98508522727272 58.96003999999999C 278.03334517045454 58.96003999999999 302.93185369318184 153.80880000000002 331.9801136363636 153.80880000000002C 361.0283735795454 153.80880000000002 385.9268821022727 128.174 414.9751420454545 128.174C 444.02340198863635 128.174 468.9219105113636 130.73748 497.97017045454544 130.73748C 527.0184303977272 130.73748 551.9169389204545 182.00708000000003 580.9651988636364 182.00708000000003C 610.0134588068182 182.00708000000003 634.9119673295454 148.68184000000002 663.9602272727273 148.68184000000002C 693.0084872159091 148.68184000000002 717.9069957386363 187.13404000000003 746.9552556818181 187.13404000000003C 776.003515625 187.13404000000003 800.9020241477272 148.68184000000002 829.950284090909 148.68184000000002C 858.9985440340909 148.68184000000002 883.8970525568182 128.174 912.9453125 128.174C 912.9453125 128.174 912.9453125 128.174 912.9453125 256.348M 912.9453125 128.174z"
                        pathFrom="M 0 256.348L 0 226.44073333333336C 29.636647727272724 226.44073333333336 55.039488636363636 179.44360000000003 84.67613636363636 179.44360000000003C 114.31278409090908 179.44360000000003 139.715625 85.44933333333336 169.35227272727272 85.44933333333336C 198.98892045454545 85.44933333333336 224.39176136363636 12.81740000000002 254.0284090909091 12.81740000000002C 283.6650568181818 12.81740000000002 309.06789772727274 170.89866666666668 338.70454545454544 170.89866666666668C 368.34119318181814 170.89866666666668 393.7440340909091 128.17400000000004 423.3806818181818 128.17400000000004C 453.0173295454545 128.17400000000004 478.4201704545455 132.44646666666668 508.0568181818182 132.44646666666668C 537.693465909091 132.44646666666668 563.0963068181819 217.89580000000004 592.7329545454546 217.89580000000004C 622.3696022727273 217.89580000000004 647.7724431818182 162.35373333333337 677.4090909090909 162.35373333333337C 707.0457386363636 162.35373333333337 732.4485795454545 226.44073333333336 762.0852272727273 226.44073333333336C 791.721875 226.44073333333336 817.1247159090909 162.35373333333337 846.7613636363636 162.35373333333337C 876.3980113636363 162.35373333333337 901.8008522727273 128.17400000000004 931.4375 128.17400000000004C 931.4375 128.17400000000004 931.4375 128.17400000000004 931.4375 256.348M 931.4375 128.17400000000004z"
                      ></path>
                      <path
                        id="SvgjsPath4281"
                        d="M 0 187.13404000000003C 29.048259943181815 187.13404000000003 53.94676846590909 158.93576000000002 82.9950284090909 158.93576000000002C 112.04328835227273 158.93576000000002 136.941796875 102.5392 165.9900568181818 102.5392C 195.03831676136363 102.5392 219.9368252840909 58.96003999999999 248.98508522727272 58.96003999999999C 278.03334517045454 58.96003999999999 302.93185369318184 153.80880000000002 331.9801136363636 153.80880000000002C 361.0283735795454 153.80880000000002 385.9268821022727 128.174 414.9751420454545 128.174C 444.02340198863635 128.174 468.9219105113636 130.73748 497.97017045454544 130.73748C 527.0184303977272 130.73748 551.9169389204545 182.00708000000003 580.9651988636364 182.00708000000003C 610.0134588068182 182.00708000000003 634.9119673295454 148.68184000000002 663.9602272727273 148.68184000000002C 693.0084872159091 148.68184000000002 717.9069957386363 187.13404000000003 746.9552556818181 187.13404000000003C 776.003515625 187.13404000000003 800.9020241477272 148.68184000000002 829.950284090909 148.68184000000002C 858.9985440340909 148.68184000000002 883.8970525568182 128.174 912.9453125 128.174"
                        fill="none"
                        fill-opacity="1"
                        stroke="#00c9db"
                        stroke-opacity="1"
                        stroke-linecap="butt"
                        stroke-width="2.3"
                        stroke-dasharray="0"
                        class="apexcharts-area"
                        index="1"
                        clip-path="url(#gridRectMaskjahh5dru)"
                        pathTo="M 0 187.13404000000003C 29.048259943181815 187.13404000000003 53.94676846590909 158.93576000000002 82.9950284090909 158.93576000000002C 112.04328835227273 158.93576000000002 136.941796875 102.5392 165.9900568181818 102.5392C 195.03831676136363 102.5392 219.9368252840909 58.96003999999999 248.98508522727272 58.96003999999999C 278.03334517045454 58.96003999999999 302.93185369318184 153.80880000000002 331.9801136363636 153.80880000000002C 361.0283735795454 153.80880000000002 385.9268821022727 128.174 414.9751420454545 128.174C 444.02340198863635 128.174 468.9219105113636 130.73748 497.97017045454544 130.73748C 527.0184303977272 130.73748 551.9169389204545 182.00708000000003 580.9651988636364 182.00708000000003C 610.0134588068182 182.00708000000003 634.9119673295454 148.68184000000002 663.9602272727273 148.68184000000002C 693.0084872159091 148.68184000000002 717.9069957386363 187.13404000000003 746.9552556818181 187.13404000000003C 776.003515625 187.13404000000003 800.9020241477272 148.68184000000002 829.950284090909 148.68184000000002C 858.9985440340909 148.68184000000002 883.8970525568182 128.174 912.9453125 128.174"
                        pathFrom="M 0 226.44073333333336C 29.636647727272724 226.44073333333336 55.039488636363636 179.44360000000003 84.67613636363636 179.44360000000003C 114.31278409090908 179.44360000000003 139.715625 85.44933333333336 169.35227272727272 85.44933333333336C 198.98892045454545 85.44933333333336 224.39176136363636 12.81740000000002 254.0284090909091 12.81740000000002C 283.6650568181818 12.81740000000002 309.06789772727274 170.89866666666668 338.70454545454544 170.89866666666668C 368.34119318181814 170.89866666666668 393.7440340909091 128.17400000000004 423.3806818181818 128.17400000000004C 453.0173295454545 128.17400000000004 478.4201704545455 132.44646666666668 508.0568181818182 132.44646666666668C 537.693465909091 132.44646666666668 563.0963068181819 217.89580000000004 592.7329545454546 217.89580000000004C 622.3696022727273 217.89580000000004 647.7724431818182 162.35373333333337 677.4090909090909 162.35373333333337C 707.0457386363636 162.35373333333337 732.4485795454545 226.44073333333336 762.0852272727273 226.44073333333336C 791.721875 226.44073333333336 817.1247159090909 162.35373333333337 846.7613636363636 162.35373333333337C 876.3980113636363 162.35373333333337 901.8008522727273 128.17400000000004 931.4375 128.17400000000004"
                      ></path>
                      <g
                        id="SvgjsG4274"
                        class="apexcharts-series-markers-wrap"
                        data:realIndex="1"
                      >
                        <g class="apexcharts-series-markers">
                          <circle
                            id="SvgjsCircle4364"
                            r="0"
                            cx="0"
                            cy="0"
                            class="apexcharts-marker wvvfgdaah no-pointer-events"
                            stroke="#ffffff"
                            fill="#00c9db"
                            fill-opacity="1"
                            stroke-width="2"
                            stroke-opacity="0.9"
                            default-marker-size="0"
                          ></circle>
                        </g>
                      </g>
                    </g>
                    <g
                      id="SvgjsG4264"
                      class="apexcharts-series"
                      seriesName="Income"
                      data:longestSeries="true"
                      rel="1"
                      data:realIndex="0"
                    >
                      <path
                        id="SvgjsPath4271"
                        d="M 0 256.348L 0 210.20536C 29.048259943181815 210.20536 53.94676846590909 125.61052000000001 82.9950284090909 125.61052000000001C 112.04328835227273 125.61052000000001 136.941796875 51.2696 165.9900568181818 51.2696C 195.03831676136363 51.2696 219.9368252840909 158.93576000000002 248.98508522727272 158.93576000000002C 278.03334517045454 158.93576000000002 302.93185369318184 30.76176000000001 331.9801136363636 30.76176000000001C 361.0283735795454 30.76176000000001 385.9268821022727 128.174 414.9751420454545 128.174C 444.02340198863635 128.174 468.9219105113636 153.80880000000002 497.97017045454544 153.80880000000002C 527.0184303977272 153.80880000000002 551.9169389204545 123.04704000000001 580.9651988636364 123.04704000000001C 610.0134588068182 123.04704000000001 634.9119673295454 30.76176000000001 663.9602272727273 30.76176000000001C 693.0084872159091 30.76176000000001 717.9069957386363 51.2696 746.9552556818181 51.2696C 776.003515625 51.2696 800.9020241477272 102.5392 829.950284090909 102.5392C 858.9985440340909 102.5392 883.8970525568182 76.90440000000001 912.9453125 76.90440000000001C 912.9453125 76.90440000000001 912.9453125 76.90440000000001 912.9453125 256.348M 912.9453125 76.90440000000001z"
                        fill="url(#SvgjsLinearGradient4267)"
                        fill-opacity="1"
                        stroke-opacity="1"
                        stroke-linecap="butt"
                        stroke-width="0"
                        stroke-dasharray="0"
                        class="apexcharts-area"
                        index="0"
                        clip-path="url(#gridRectMaskjahh5dru)"
                        pathTo="M 0 256.348L 0 210.20536C 29.048259943181815 210.20536 53.94676846590909 125.61052000000001 82.9950284090909 125.61052000000001C 112.04328835227273 125.61052000000001 136.941796875 51.2696 165.9900568181818 51.2696C 195.03831676136363 51.2696 219.9368252840909 158.93576000000002 248.98508522727272 158.93576000000002C 278.03334517045454 158.93576000000002 302.93185369318184 30.76176000000001 331.9801136363636 30.76176000000001C 361.0283735795454 30.76176000000001 385.9268821022727 128.174 414.9751420454545 128.174C 444.02340198863635 128.174 468.9219105113636 153.80880000000002 497.97017045454544 153.80880000000002C 527.0184303977272 153.80880000000002 551.9169389204545 123.04704000000001 580.9651988636364 123.04704000000001C 610.0134588068182 123.04704000000001 634.9119673295454 30.76176000000001 663.9602272727273 30.76176000000001C 693.0084872159091 30.76176000000001 717.9069957386363 51.2696 746.9552556818181 51.2696C 776.003515625 51.2696 800.9020241477272 102.5392 829.950284090909 102.5392C 858.9985440340909 102.5392 883.8970525568182 76.90440000000001 912.9453125 76.90440000000001C 912.9453125 76.90440000000001 912.9453125 76.90440000000001 912.9453125 256.348M 912.9453125 76.90440000000001z"
                        pathFrom="M -1 256.348L -1 256.348L 82.9950284090909 256.348L 165.9900568181818 256.348L 248.98508522727272 256.348L 331.9801136363636 256.348L 414.9751420454545 256.348L 497.97017045454544 256.348L 580.9651988636364 256.348L 663.9602272727273 256.348L 746.9552556818181 256.348L 829.950284090909 256.348L 912.9453125 256.348"
                      ></path>
                      <path
                        id="SvgjsPath4272"
                        d="M 0 210.20536C 29.048259943181815 210.20536 53.94676846590909 125.61052000000001 82.9950284090909 125.61052000000001C 112.04328835227273 125.61052000000001 136.941796875 51.2696 165.9900568181818 51.2696C 195.03831676136363 51.2696 219.9368252840909 158.93576000000002 248.98508522727272 158.93576000000002C 278.03334517045454 158.93576000000002 302.93185369318184 30.76176000000001 331.9801136363636 30.76176000000001C 361.0283735795454 30.76176000000001 385.9268821022727 128.174 414.9751420454545 128.174C 444.02340198863635 128.174 468.9219105113636 153.80880000000002 497.97017045454544 153.80880000000002C 527.0184303977272 153.80880000000002 551.9169389204545 123.04704000000001 580.9651988636364 123.04704000000001C 610.0134588068182 123.04704000000001 634.9119673295454 30.76176000000001 663.9602272727273 30.76176000000001C 693.0084872159091 30.76176000000001 717.9069957386363 51.2696 746.9552556818181 51.2696C 776.003515625 51.2696 800.9020241477272 102.5392 829.950284090909 102.5392C 858.9985440340909 102.5392 883.8970525568182 76.90440000000001 912.9453125 76.90440000000001"
                        fill="none"
                        fill-opacity="1"
                        stroke="#377dff"
                        stroke-opacity="1"
                        stroke-linecap="butt"
                        stroke-width="2.3"
                        stroke-dasharray="0"
                        class="apexcharts-area"
                        index="0"
                        clip-path="url(#gridRectMaskjahh5dru)"
                        pathTo="M 0 210.20536C 29.048259943181815 210.20536 53.94676846590909 125.61052000000001 82.9950284090909 125.61052000000001C 112.04328835227273 125.61052000000001 136.941796875 51.2696 165.9900568181818 51.2696C 195.03831676136363 51.2696 219.9368252840909 158.93576000000002 248.98508522727272 158.93576000000002C 278.03334517045454 158.93576000000002 302.93185369318184 30.76176000000001 331.9801136363636 30.76176000000001C 361.0283735795454 30.76176000000001 385.9268821022727 128.174 414.9751420454545 128.174C 444.02340198863635 128.174 468.9219105113636 153.80880000000002 497.97017045454544 153.80880000000002C 527.0184303977272 153.80880000000002 551.9169389204545 123.04704000000001 580.9651988636364 123.04704000000001C 610.0134588068182 123.04704000000001 634.9119673295454 30.76176000000001 663.9602272727273 30.76176000000001C 693.0084872159091 30.76176000000001 717.9069957386363 51.2696 746.9552556818181 51.2696C 776.003515625 51.2696 800.9020241477272 102.5392 829.950284090909 102.5392C 858.9985440340909 102.5392 883.8970525568182 76.90440000000001 912.9453125 76.90440000000001"
                        pathFrom="M -1 256.348L -1 256.348L 82.9950284090909 256.348L 165.9900568181818 256.348L 248.98508522727272 256.348L 331.9801136363636 256.348L 414.9751420454545 256.348L 497.97017045454544 256.348L 580.9651988636364 256.348L 663.9602272727273 256.348L 746.9552556818181 256.348L 829.950284090909 256.348L 912.9453125 256.348"
                      ></path>
                      <g
                        id="SvgjsG4265"
                        class="apexcharts-series-markers-wrap"
                        data:realIndex="0"
                      >
                        <g class="apexcharts-series-markers">
                          <circle
                            id="SvgjsCircle4363"
                            r="0"
                            cx="0"
                            cy="0"
                            class="apexcharts-marker w5rysthjbj no-pointer-events"
                            stroke="#ffffff"
                            fill="#377dff"
                            fill-opacity="1"
                            stroke-width="2"
                            stroke-opacity="0.9"
                            default-marker-size="0"
                          ></circle>
                        </g>
                      </g>
                      <g
                        id="SvgjsG4266"
                        class="apexcharts-datalabels"
                        data:realIndex="0"
                      ></g>
                    </g>
                    <g
                      id="SvgjsG4275"
                      class="apexcharts-datalabels"
                      data:realIndex="1"
                    ></g>
                  </g>
                  <line
                    id="SvgjsLine4358"
                    x1="0"
                    y1="0"
                    x2="912.9453125"
                    y2="0"
                    stroke="#b6b6b6"
                    stroke-dasharray="0"
                    stroke-width="1"
                    class="apexcharts-ycrosshairs"
                  ></line>
                  <line
                    id="SvgjsLine4359"
                    x1="0"
                    y1="0"
                    x2="912.9453125"
                    y2="0"
                    stroke-dasharray="0"
                    stroke-width="0"
                    class="apexcharts-ycrosshairs-hidden"
                  ></line>
                  <g id="SvgjsG4360" class="apexcharts-yaxis-annotations"></g>
                  <g id="SvgjsG4361" class="apexcharts-xaxis-annotations"></g>
                  <g id="SvgjsG4362" class="apexcharts-point-annotations"></g>
                </g>
                <rect
                  id="SvgjsRect4258"
                  width="0"
                  height="0"
                  x="0"
                  y="0"
                  rx="0"
                  ry="0"
                  opacity="1"
                  stroke-width="0"
                  stroke="none"
                  stroke-dasharray="0"
                  fill="#fefefe"
                ></rect>
                <g
                  id="SvgjsG4321"
                  class="apexcharts-yaxis"
                  rel="0"
                  transform="translate(21.78125, 0)"
                >
                  <g id="SvgjsG4322" class="apexcharts-yaxis-texts-g">
                    <text
                      id="SvgjsText4323"
                      font-family="Helvetica, Arial, sans-serif"
                      x="20"
                      y="47.5"
                      text-anchor="end"
                      dominant-baseline="auto"
                      font-size="11px"
                      font-weight="400"
                      fill="#9ba7b2"
                      class="apexcharts-text apexcharts-yaxis-label"
                      style="font-family: Helvetica, Arial, sans-serif"
                    >
                      <tspan id="SvgjsTspan4324">100$</tspan>
                    </text>
                    <text
                      id="SvgjsText4325"
                      font-family="Helvetica, Arial, sans-serif"
                      x="20"
                      y="98.7696"
                      text-anchor="end"
                      dominant-baseline="auto"
                      font-size="11px"
                      font-weight="400"
                      fill="#9ba7b2"
                      class="apexcharts-text apexcharts-yaxis-label"
                      style="font-family: Helvetica, Arial, sans-serif"
                    >
                      <tspan id="SvgjsTspan4326">80$</tspan>
                    </text>
                    <text
                      id="SvgjsText4327"
                      font-family="Helvetica, Arial, sans-serif"
                      x="20"
                      y="150.0392"
                      text-anchor="end"
                      dominant-baseline="auto"
                      font-size="11px"
                      font-weight="400"
                      fill="#9ba7b2"
                      class="apexcharts-text apexcharts-yaxis-label"
                      style="font-family: Helvetica, Arial, sans-serif"
                    >
                      <tspan id="SvgjsTspan4328">60$</tspan>
                    </text>
                    <text
                      id="SvgjsText4329"
                      font-family="Helvetica, Arial, sans-serif"
                      x="20"
                      y="201.3088"
                      text-anchor="end"
                      dominant-baseline="auto"
                      font-size="11px"
                      font-weight="400"
                      fill="#9ba7b2"
                      class="apexcharts-text apexcharts-yaxis-label"
                      style="font-family: Helvetica, Arial, sans-serif"
                    >
                      <tspan id="SvgjsTspan4330">40$</tspan>
                    </text>
                    <text
                      id="SvgjsText4331"
                      font-family="Helvetica, Arial, sans-serif"
                      x="20"
                      y="252.5784"
                      text-anchor="end"
                      dominant-baseline="auto"
                      font-size="11px"
                      font-weight="400"
                      fill="#9ba7b2"
                      class="apexcharts-text apexcharts-yaxis-label"
                      style="font-family: Helvetica, Arial, sans-serif"
                    >
                      <tspan id="SvgjsTspan4332">20$</tspan>
                    </text>
                    <text
                      id="SvgjsText4333"
                      font-family="Helvetica, Arial, sans-serif"
                      x="20"
                      y="303.848"
                      text-anchor="end"
                      dominant-baseline="auto"
                      font-size="11px"
                      font-weight="400"
                      fill="#9ba7b2"
                      class="apexcharts-text apexcharts-yaxis-label"
                      style="font-family: Helvetica, Arial, sans-serif"
                    >
                      <tspan id="SvgjsTspan4334">0$</tspan>
                    </text>
                  </g>
                </g>
                <g id="SvgjsG4255" class="apexcharts-annotations"></g>
              </svg>
              <div class="apexcharts-tooltip apexcharts-theme-dark">
                <div
                  class="apexcharts-tooltip-title"
                  style="font-family: Helvetica, Arial, sans-serif; font-size: 12px"
                ></div>
                <div class="apexcharts-tooltip-series-group">
                  <span
                    class="apexcharts-tooltip-marker"
                    style="background-color: rgb(55, 125, 255)"
                  ></span>
                  <div
                    class="apexcharts-tooltip-text"
                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px"
                  >
                    <div class="apexcharts-tooltip-y-group">
                      <span class="apexcharts-tooltip-text-label"></span
                      ><span class="apexcharts-tooltip-text-value"></span>
                    </div>
                    <div class="apexcharts-tooltip-z-group">
                      <span class="apexcharts-tooltip-text-z-label"></span
                      ><span class="apexcharts-tooltip-text-z-value"></span>
                    </div>
                  </div>
                </div>
                <div class="apexcharts-tooltip-series-group">
                  <span
                    class="apexcharts-tooltip-marker"
                    style="background-color: rgb(0, 201, 219)"
                  ></span>
                  <div
                    class="apexcharts-tooltip-text"
                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px"
                  >
                    <div class="apexcharts-tooltip-y-group">
                      <span class="apexcharts-tooltip-text-label"></span
                      ><span class="apexcharts-tooltip-text-value"></span>
                    </div>
                    <div class="apexcharts-tooltip-z-group">
                      <span class="apexcharts-tooltip-text-z-label"></span
                      ><span class="apexcharts-tooltip-text-z-value"></span>
                    </div>
                  </div>
                </div>
              </div>
              <div
                class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-dark"
              >
                <div
                  class="apexcharts-xaxistooltip-text"
                  style="font-family: Helvetica, Arial, sans-serif; font-size: 12px"
                ></div>
              </div>
              <div
                class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-dark"
              >
                <div class="apexcharts-yaxistooltip-text"></div>
              </div>
            </div>
          </div>
          <div class="resize-triggers">
            <div class="expand-trigger">
              <div style="width: 1028px; height: 396px"></div>
            </div>
            <div class="contract-trigger"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  data() {
    return {
      todaysell: "",
      todaypaid: "",
      todaydue: "",
    };
  },
  created() {
    if (!User.loggedIn()) {
      this.$router.push({ name: "/" });
    }
    axios
      .get("/api/home/sell")
      .then((resp) => (this.todaysell = resp.data))
      .catch();
    axios
      .get("/api/home/paid")
      .then((resp) => (this.todaypaid = resp.data))
      .catch();
    axios.get("/api/home/due").then((resp) => (this.todaydue = resp.data));
  },
};
</script>
<style scoped>
.apexcharts-legend {
  display: flex;
  overflow: auto;
  padding: 0 10px;
}
.apexcharts-legend.position-bottom,
.apexcharts-legend.position-top {
  flex-wrap: wrap;
}
.apexcharts-legend.position-right,
.apexcharts-legend.position-left {
  flex-direction: column;
  bottom: 0;
}
.apexcharts-legend.position-bottom.apexcharts-align-left,
.apexcharts-legend.position-top.apexcharts-align-left,
.apexcharts-legend.position-right,
.apexcharts-legend.position-left {
  justify-content: flex-start;
}
.apexcharts-legend.position-bottom.apexcharts-align-center,
.apexcharts-legend.position-top.apexcharts-align-center {
  justify-content: center;
}
.apexcharts-legend.position-bottom.apexcharts-align-right,
.apexcharts-legend.position-top.apexcharts-align-right {
  justify-content: flex-end;
}
.apexcharts-legend-series {
  cursor: pointer;
  line-height: normal;
}
.apexcharts-legend.position-bottom .apexcharts-legend-series,
.apexcharts-legend.position-top .apexcharts-legend-series {
  display: flex;
  align-items: center;
}
.apexcharts-legend-text {
  position: relative;
  font-size: 14px;
}
.apexcharts-legend-text *,
.apexcharts-legend-marker * {
  pointer-events: none;
}
.apexcharts-legend-marker {
  position: relative;
  display: inline-block;
  cursor: pointer;
  margin-right: 3px;
  border-style: solid;
}

.apexcharts-legend.apexcharts-align-right .apexcharts-legend-series,
.apexcharts-legend.apexcharts-align-left .apexcharts-legend-series {
  display: inline-block;
}
.apexcharts-legend-series.apexcharts-no-click {
  cursor: auto;
}
.apexcharts-legend .apexcharts-hidden-zero-series,
.apexcharts-legend .apexcharts-hidden-null-series {
  display: none !important;
}
.apexcharts-inactive-legend {
  opacity: 0.45;
}
</style>
