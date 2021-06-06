var APP_DATA = {
  "scenes": [
    {
      "id": "0-map-commune",
      "name": "Map commune",
      "levels": [
        {
          "tileSize": 256,
          "size": 256,
          "fallbackOnly": true
        },
        {
          "tileSize": 512,
          "size": 512
        },
        {
          "tileSize": 512,
          "size": 1024
        },
        {
          "tileSize": 512,
          "size": 2048
        }
      ],
      "faceSize": 1520,
      "initialViewParameters": {
        "yaw": 0,
        "pitch": 0,
        "fov": 1.3687812585745385
      },
      "linkHotspots": [
        {
          "yaw": 0.7938434572801363,
          "pitch": -0.12200751468054705,
          "rotation": 0,
          "target": "2-crous"
        },
        {
          "yaw": -0.023233852522913878,
          "pitch": -0.14616921908579528,
          "rotation": 0,
          "target": "1-rotonde"
        },
        {
          "yaw": -0.7480893202803784,
          "pitch": 0.012879182838773318,
          "rotation": 0,
          "target": "3-bu"
        }
      ],
      "infoHotspots": []
    },
    {
      "id": "1-rotonde",
      "name": "Rotonde",
      "levels": [
        {
          "tileSize": 256,
          "size": 256,
          "fallbackOnly": true
        },
        {
          "tileSize": 512,
          "size": 512
        },
        {
          "tileSize": 512,
          "size": 1024
        },
        {
          "tileSize": 512,
          "size": 2048
        }
      ],
      "faceSize": 1520,
      "initialViewParameters": {
        "yaw": 0.07415045962629918,
        "pitch": 0.05552190873114604,
        "fov": 1.3687812585745385
      },
      "linkHotspots": [
        {
          "yaw": 2.9829864771819095,
          "pitch": 1.4090075737139713,
          "rotation": 0,
          "target": "0-map-commune"
        }
      ],
      "infoHotspots": []
    },
    {
      "id": "2-crous",
      "name": "CROUS",
      "levels": [
        {
          "tileSize": 256,
          "size": 256,
          "fallbackOnly": true
        },
        {
          "tileSize": 512,
          "size": 512
        },
        {
          "tileSize": 512,
          "size": 1024
        },
        {
          "tileSize": 512,
          "size": 2048
        }
      ],
      "faceSize": 1520,
      "initialViewParameters": {
        "yaw": -3.0385852978511974,
        "pitch": 0.09113740094609213,
        "fov": 1.3687812585745385
      },
      "linkHotspots": [
        {
          "yaw": 3.0356005396651797,
          "pitch": 1.3988021626017009,
          "rotation": 3.141592653589793,
          "target": "0-map-commune"
        }
      ],
      "infoHotspots": []
    },
    {
      "id": "3-bu",
      "name": "BU",
      "levels": [
        {
          "tileSize": 256,
          "size": 256,
          "fallbackOnly": true
        },
        {
          "tileSize": 512,
          "size": 512
        },
        {
          "tileSize": 512,
          "size": 1024
        },
        {
          "tileSize": 512,
          "size": 2048
        }
      ],
      "faceSize": 1520,
      "initialViewParameters": {
        "yaw": 0,
        "pitch": 0,
        "fov": 1.3687812585745385
      },
      "linkHotspots": [
        {
          "yaw": 3.025010908232831,
          "pitch": 1.4154727964336296,
          "rotation": 0,
          "target": "0-map-commune"
        },
        {
          "yaw": -1.6456641930089724,
          "pitch": 0.1964539446947775,
          "rotation": 0,
          "target": "4-bu-partie-gauche"
        }
      ],
      "infoHotspots": []
    },
    {
      "id": "4-bu-partie-gauche",
      "name": "BU partie gauche",
      "levels": [
        {
          "tileSize": 256,
          "size": 256,
          "fallbackOnly": true
        },
        {
          "tileSize": 512,
          "size": 512
        },
        {
          "tileSize": 512,
          "size": 1024
        },
        {
          "tileSize": 512,
          "size": 2048
        }
      ],
      "faceSize": 1520,
      "initialViewParameters": {
        "yaw": 0.7394568245820494,
        "pitch": 0.1414538649405852,
        "fov": 1.3687812585745385
      },
      "linkHotspots": [
        {
          "yaw": 2.93769848254611,
          "pitch": 1.412693505258817,
          "rotation": 0,
          "target": "0-map-commune"
        },
        {
          "yaw": -2.9152552825331917,
          "pitch": 0.05642359328494351,
          "rotation": 0,
          "target": "3-bu"
        },
        {
          "yaw": 0.8817763390869224,
          "pitch": 0.21275568672776757,
          "rotation": 0,
          "target": "5-salle-tudiants"
        }
      ],
      "infoHotspots": []
    },
    {
      "id": "5-salle-tudiants",
      "name": "BU - Salle de travail",
      "levels": [
        {
          "tileSize": 256,
          "size": 256,
          "fallbackOnly": true
        },
        {
          "tileSize": 512,
          "size": 512
        },
        {
          "tileSize": 512,
          "size": 1024
        },
        {
          "tileSize": 512,
          "size": 2048
        }
      ],
      "faceSize": 1520,
      "initialViewParameters": {
        "yaw": 2.535534429069436,
        "pitch": 0.35469545563502436,
        "fov": 1.3687812585745385
      },
      "linkHotspots": [
        {
          "yaw": 0.703235452093887,
          "pitch": 0.19874947408634114,
          "rotation": 0,
          "target": "4-bu-partie-gauche"
        },
        {
          "yaw": 3.050160477023624,
          "pitch": 1.4200507332487415,
          "rotation": 5.497787143782138,
          "target": "0-map-commune"
        }
      ],
      "infoHotspots": []
    }
  ],
  "name": "Parties communes",
  "settings": {
    "mouseViewMode": "drag",
    "autorotateEnabled": false,
    "fullscreenButton": false,
    "viewControlButtons": false
  }
};
