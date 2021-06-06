var APP_DATA = {
  "scenes": [
    {
      "id": "0-plan",
      "name": "Plan",
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
        "yaw": 0.014333784373830483,
        "pitch": -0.07654148171842223,
        "fov": 1.3687812585745385
      },
      "linkHotspots": [
        {
          "yaw": -0.46173024174219535,
          "pitch": 0.15774742294146016,
          "rotation": 0,
          "target": "3-caftria"
        },
        {
          "yaw": 0.39173024174219535,
          "pitch": 0.15774742294146016,
          "rotation": 0,
          "target": "1-entre-partie-1"
        },
        {
          "yaw": 0.543298723535294,
          "pitch": -0.39040819187544074,
          "rotation": 0,
          "target": "4-fond-salle-dtude"
        },
        {
          "yaw": -0.3097313859323272,
          "pitch": -0.5469152569157067,
          "rotation": 0,
          "target": "6-salle-b6"
        }
      ],
      "infoHotspots": [
          {
          "yaw": 0.04458752509558117,
          "pitch": 0.03716722518734983,
          "title": "<font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Instructions</font></font>",
          "text": "<font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Bonjour et bienvenue dans la visite du FCU de l'IUT de Lens.<br><br>Pour visiter une salle, il suffit de cliquer sur l'un des points situé sur le plan en face de vous.<br><br>Pour revenir au plan, il suffit de regarder le sol et de cliquer sur le point correspondant.<br><br>Bonne visite !</font></font>"
        },
        {
          "yaw": 0.012272620184882399,
          "pitch": 0.6672367971700179,
          "title": "Retour au choix du département <a class='redirection' href='../index.html'>ici</a>",
          "text":''
        }
          
      ]
    },
    {
      "id": "1-entre-partie-1",
      "name": "Entrée",
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
        "yaw": 2.146610630507803,
        "pitch": 0.02453846870269949,
        "fov": 1.3687812585745385
      },
      "linkHotspots": [
        {
          "yaw": 3.0352036662728423,
          "pitch": 1.3993815892256318,
          "rotation": 6.283185307179586,
          "target": "0-plan"
        },
        {
          "yaw": 1.672002608473905,
          "pitch": 0.09689034895508897,
          "rotation": 0,
          "target": "2-entre-partie-2"
        }
      ],
      "infoHotspots": []
    },
    {
      "id": "2-entre-partie-2",
      "name": "Entrée 2",
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
        "yaw": 0.8137617084527946,
        "pitch": 0.311499970827958,
        "fov": 1.3687812585745385
      },
      "linkHotspots": [
        {
          "yaw": -3.1003107421366494,
          "pitch": 1.4175035534127112,
          "rotation": 0,
          "target": "0-plan"
        },
        {
          "yaw": -2.178395567040809,
          "pitch": 0.09931115302774529,
          "rotation": 0,
          "target": "1-entre-partie-1"
        }
      ],
      "infoHotspots": []
    },
    {
      "id": "3-caftria",
      "name": "Cafétéria",
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
        "yaw": -0.5946750533746652,
        "pitch": 0.21518556237765907,
        "fov": 1.3687812585745385
      },
      "linkHotspots": [],
      "infoHotspots": []
    },
    {
      "id": "4-fond-salle-dtude",
      "name": "Salle d'étude",
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
        "yaw": 3.026515208162312,
        "pitch": 0.0009622653300791484,
        "fov": 1.3687812585745385
      },
      "linkHotspots": [
        {
          "yaw": 3.0678874225934827,
          "pitch": 1.389047565195888,
          "rotation": 3.141592653589793,
          "target": "0-plan"
        },
        {
          "yaw": -3.1248805211444655,
          "pitch": 0.024310631215874068,
          "rotation": 0,
          "target": "5-devant-salle-dtude"
        }
      ],
      "infoHotspots": []
    },
    {
      "id": "5-devant-salle-dtude",
      "name": "Salle d'étude",
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
        "yaw": -0.001780948216325129,
        "pitch": 0.12591601932391683,
        "fov": 1.3687812585745385
      },
      "linkHotspots": [
        {
          "yaw": 3.083060930172122,
          "pitch": 1.417238806828495,
          "rotation": 0,
          "target": "0-plan"
        },
        {
          "yaw": 0.06072350814455518,
          "pitch": 0.1550657265567139,
          "rotation": 0,
          "target": "4-fond-salle-dtude"
        }
      ],
      "infoHotspots": []
    },
    {
      "id": "6-salle-b6",
      "name": "Salle B6",
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
        "yaw": 3.053313081450728,
        "pitch": 0.3489704278874619,
        "fov": 1.3687812585745385
      },
      "linkHotspots": [
        {
          "yaw": 2.9721873695925805,
          "pitch": 1.4164486489121835,
          "rotation": 0,
          "target": "0-plan"
        }
      ],
      "infoHotspots": []
    }
  ],
  "name": "FCU ",
  "settings": {
    "mouseViewMode": "drag",
    "autorotateEnabled": false,
    "fullscreenButton": false,
    "viewControlButtons": false
  }
};
