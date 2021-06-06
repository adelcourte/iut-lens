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
        "pitch": 0,
        "yaw": 0,
        "fov": 1.5707963267948966
      },
      "linkHotspots": [
        {
          "yaw": 0.028519877686072448,
          "pitch": -0.5937045407074883,
          "rotation": 3.141592653589793,
          "target": "1-5d"
        },
        {
          "yaw": -0.11379635597148585,
          "pitch": -0.5922004203856872,
          "rotation": 3.141592653589793,
          "target": "2-6d"
        },
        {
          "yaw": -0.11417180191047471,
          "pitch": 0.14012795964752556,
          "rotation": 0,
          "target": "3-011c"
        }
      ],
      "infoHotspots": [{
          "yaw": 0.04458752509558117,
          "pitch": 0.03716722518734983,
          "title": "<font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Instructions</font></font>",
          "text": "<font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Bonjour et bienvenue dans la visite du département GEA de l'IUT de Lens.<br><br>Pour visiter une salle, il suffit de cliquer sur l'un des points situé sur le plan en face de vous.<br><br>Pour revenir au plan, il suffit de regarder le sol et de cliquer sur le point correspondant.<br><br>Bonne visite !</font></font>"
        },
        {
          "yaw": 0.012272620184882399,
          "pitch": 0.6672367971700179,
          "title": "Retour au choix du département <a class='redirection' href='../index.html'>ici</a>",
          "text":''
        }]
    },
    {
      "id": "1-5d",
      "name": "5D",
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
        "yaw": -3.107515394795275,
        "pitch": 0.014265682916697386,
        "fov": 1.3687812585745385
      },
      "linkHotspots": [
        {
          "yaw": 3.1230795725157012,
          "pitch": 1.4195787035172103,
          "rotation": 0,
          "target": "0-plan"
        }
      ],
      "infoHotspots": []
    },
    {
      "id": "2-6d",
      "name": "6D",
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
        "yaw": -0.10997502002135207,
        "pitch": 0.4660821441861458,
        "fov": 1.3687812585745385
      },
      "linkHotspots": [
        {
          "yaw": 3.0542677929198145,
          "pitch": 1.4102386973615495,
          "rotation": 0,
          "target": "0-plan"
        }
      ],
      "infoHotspots": []
    },
    {
      "id": "3-011c",
      "name": "011C",
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
        "yaw": -0.1512410639589099,
        "pitch": 0.20164956420258306,
        "fov": 1.3687812585745385
      },
      "linkHotspots": [
        {
          "yaw": 3.0587671876010685,
          "pitch": 1.4135357479830564,
          "rotation": 0,
          "target": "0-plan"
        }
      ],
      "infoHotspots": []
    }
  ],
  "name": "GEA",
  "settings": {
    "mouseViewMode": "drag",
    "autorotateEnabled": false,
    "fullscreenButton": false,
    "viewControlButtons": false
  }
};
