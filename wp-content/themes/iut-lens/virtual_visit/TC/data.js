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
          "yaw": 0.4728012862866233,
          "pitch": -0.0492791433040054,
          "rotation": 0,
          "target": "1-milieu-amphi"
        },
        {
          "yaw": -0.2425641627757713,
          "pitch": 0.36091276225315383,
          "rotation": 0,
          "target": "3-bureau-des-projet"
        },
        {
          "yaw": -0.4160558552767526,
          "pitch": 0.15238852686324122,
          "rotation": 3.141592653589793,
          "target": "4-006b"
        },
        {
          "yaw": -0.5376854813484435,
          "pitch": 0.032071325112307036,
          "rotation": 4.71238898038469,
          "target": "6-010b"
        },
        {
          "yaw": -0.6725169471598704,
          "pitch": 0.024767362387855485,
          "rotation": 1.5707963267948966,
          "target": "5-011b"
        }
      ],
      "infoHotspots": [{
          "yaw": 0.04458752509558117,
          "pitch": 0.03716722518734983,
          "title": "<font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Instructions</font></font>",
          "text": "<font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Bonjour et bienvenue dans la visite du département TC de l'IUT de Lens.<br><br>Pour visiter une salle, il suffit de cliquer sur l'un des points situé sur le plan en face de vous.<br><br>Pour revenir au plan, il suffit de regarder le sol et de cliquer sur le point correspondant.<br><br>Bonne visite !</font></font>"
        },
        {
          "yaw": 0.012272620184882399,
          "pitch": 0.6672367971700179,
          "title": "Retour au choix du département <a class='redirection' href='../index.html'>ici</a>",
          "text":''
        }]
    },
    {
      "id": "1-milieu-amphi",
      "name": "Amphi centre",
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
        "yaw": 0.07213484902639244,
        "pitch": 0.23167934557378622,
        "fov": 1.3687812585745385
      },
      "linkHotspots": [
        {
          "yaw": 0.07213484902639244,
          "pitch": 0.23167934557378622,
          "rotation": 0,
          "target": "2-bas-amphi"
        },
        {
          "yaw": 2.8608699446040884,
          "pitch": 1.401468544386736,
          "rotation": 0,
          "target": "0-plan"
        }
      ],
      "infoHotspots": []
    },
    {
      "id": "2-bas-amphi",
      "name": "Amphi bas",
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
        "yaw": 0.21015188952584474,
        "pitch": 0.03950306488593469,
        "fov": 1.265676047841681
      },
      "linkHotspots": [
        {
          "yaw": 2.808386014620094,
          "pitch": 1.4120123330615257,
          "rotation": 0,
          "target": "0-plan"
        }
      ],
      "infoHotspots": []
    },
    {
      "id": "3-bureau-des-projet",
      "name": "Bureau des actions",
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
        "yaw": -2.9112171896302996,
        "pitch": 0.6217781307614345,
        "fov": 1.4134061960355204
      },
      "linkHotspots": [
        {
          "yaw": 2.8668228909358895,
          "pitch": 1.397641195176078,
          "rotation": 3.141592653589793,
          "target": "0-plan"
        }
      ],
      "infoHotspots": []
    },
    {
      "id": "4-006b",
      "name": "006B",
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
        "yaw": 2.0560745704897574,
        "pitch": 0.1910575798736467,
        "fov": 1.265676047841681
      },
      "linkHotspots": [
        {
          "yaw": 2.8379229934123043,
          "pitch": 1.4083297729100899,
          "rotation": 0,
          "target": "0-plan"
        }
      ],
      "infoHotspots": []
    },
    {
      "id": "5-011b",
      "name": "011B",
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
        "yaw": 1.8887276191040936,
        "pitch": 0.10126907603426005,
        "fov": 1.265676047841681
      },
      "linkHotspots": [
        {
          "yaw": 2.935742228563721,
          "pitch": 1.3940094191880572,
          "rotation": 3.9269908169872414,
          "target": "0-plan"
        }
      ],
      "infoHotspots": []
    },
    {
      "id": "6-010b",
      "name": "010B",
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
        "yaw": 1.8914264607571507,
        "pitch": 0.2059617521067949,
        "fov": 1.265676047841681
      },
      "linkHotspots": [
        {
          "yaw": 3.071542859770374,
          "pitch": 1.4185798534898098,
          "rotation": 4.71238898038469,
          "target": "0-plan"
        }
      ],
      "infoHotspots": []
    }
  ],
  "name": "Visite département TC",
  "settings": {
    "mouseViewMode": "drag",
    "autorotateEnabled": false,
    "fullscreenButton": false,
    "viewControlButtons": false
  }
};
