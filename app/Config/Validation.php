<?php namespace Config;

class Validation
{
	//--------------------------------------------------------------------
	// Setup
	//--------------------------------------------------------------------

	/**
	 * Stores the classes that contain the
	 * rules that are available.
	 *
	 * @var array
	 */
	public $ruleSets = [
		\CodeIgniter\Validation\Rules::class,
		\CodeIgniter\Validation\FormatRules::class,
		\CodeIgniter\Validation\FileRules::class,
		\CodeIgniter\Validation\CreditCardRules::class,
	];

	/**
	 * Specifies the views that are used to display the
	 * errors.
	 *
	 * @var array
	 */
	public $templates = [
		'list'   => 'CodeIgniter\Validation\Views\list',
		'single' => 'CodeIgniter\Validation\Views\single',
	];

	public $nodes = [
        'title' => [
            'label'  => 'Node Title',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Node title field is required.'
            ]
        ],

        'description' => [
            'label'  => 'Node Description',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Node desciption field is required.'
            ]
        ],

    ];

    public $role = [
        'role_name' => [
            'label'  => 'Role Name',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Role Name field is required.'
            ]
        ],

        'description' => [
            'label'  => 'Role Description',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Role desciption field is required.'
            ]
        ],

        'function_id' => [
            'label'  => 'Landing Page',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Landing Page field is required.'
            ]
        ],

    ];

	public $user = [
        'lastname' => [
            'label'  => 'Lastname',
            'rules'  => 'required|alpha',
            'errors' => [
                'required' => 'Lastname field is required.',
                'alpha' => 'Lastname must not have numbers.'
            ]
        ],
        'firstname' => [
            'label'  => 'Firstname',
            'rules'  => 'required|alpha',
            'errors' => [
                'required' => 'Firstname field is required.',
                'alpha' => 'Lastname must not have numbers.'
            ]
        ],
        'username' => [
            'label'  => 'Username',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Username field is required.'
            ]
        ],
        'email' => [
            'label'  => 'Email',
            'rules'  => 'required|valid_email',
            'errors' => [
                'required' => 'Email field is required.',
                'valid_email' => 'You must provide a valid email address.'
            ]
        ],
        'password' => [
            'label'  => 'Password',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Password field is required.'
            ]
        ],

        'password_retype' => [
            'label'  => 'Password Retype',
            'rules'  => 'required|matches[password]',
            'errors' => [
                'required' => 'Password field is required.',
                'matches' => 'Password Retype field must match password.'
            ]
        ],
        'birthdate' => [
            'label'  => 'Birthdate',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Birthdate field is required.'
            ]
        ],
        'role_id' => [
            'label'  => 'Role',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Role field is required.'
            ]
        ],

    ];

    public $user_edit = [
        'lastname' => [
            'label'  => 'Lastname',
            'rules'  => 'required|alpha',
            'errors' => [
                'required' => 'Lastname field is required.',
                'alpha' => 'Lastname must not have numbers.'
            ]
        ],
        'firstname' => [
            'label'  => 'Firstname',
            'rules'  => 'required|alpha',
            'errors' => [
                'required' => 'Firstname field is required.',
                'alpha' => 'Lastname must not have numbers.'
            ]
        ],
        'username' => [
            'label'  => 'Username',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Username field is required.'
            ]
        ],
        'email' => [
            'label'  => 'Email',
            'rules'  => 'required|valid_email',
            'errors' => [
                'required' => 'Email field is required.',
                'valid_email' => 'You must provide a valid email address.'
            ]
        ],

        'password_retype' => [
            'label'  => 'Password Retype',
            'rules'  => 'matches[password]',
            'errors' => [
                'required' => 'Password field is required.',
                'matches' => 'Password Retype field must match password.'
            ]
        ],

        'birthdate' => [
            'label'  => 'Birthdate',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Birthdate field is required.'
            ]
        ],
        'role_id' => [
            'label'  => 'Role',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Role field is required.'
            ]
        ],

    ];

		public $borrowers = [
	        'borrowed_by' => [
	            'label'  => 'Borrowed By',
	            'rules'  => 'required|alpha',
	            'errors' => [
	                'required' => 'Borrowed By field is required.',
	                'alpha' => 'Alphabetical Only.'
	            ]
	        ],

	        'approved_by' => [
	            'label'  => 'Approved By',
	            'rules'  => 'required',
	            'errors' => [
	                'required' => 'Approved By field is required.'
	            ]
	        ],

	        'approved_date' => [
	            'label'  => 'Approved Date',
	            'rules'  => 'required',
	            'errors' => [
	                'required' => 'Approved Date field is required.'
	            ]
	        ],

					'date_borrowed' => [
							'label'  => 'Date Borrowed',
							'rules'  => 'required',
							'errors' => [
									'required' => 'Date Borrowed field is required.',
							]
					],

	        'date_return' => [
	            'label'  => 'Date Return',
	            'rules'  => 'required',
	            'errors' => [
	                'required' => 'Date return field is required.'
	            ]
	        ],

	    ];

		public $inventories = [
			'item_code_id' => [
					'label'  => 'Item Code',
					'rules'  => 'required|max_length[10]|is_unique[inventories.item_code_id]',
					'errors' => [
						'required' => 'Item Code field is required.',
						'max_length' => 'Maximum Length of 10 Only.',
						'is_unique' => 'Information Already Exist.'
					]
			],

			'item_category' => [
					'label'  => 'Item Category',
					'rules'  => 'required',
					'errors' => [
							'required' => 'Item Category ID field is required.',
					]
			],

			'location_id' => [
					'label'  => 'Location',
					'rules'  => 'required',
					'errors' => [
							'required' => 'Location field is required.',
					]
			],

			'quantity_id' => [
					'label'  => 'Quantity',
					'rules'  => 'required|numeric',
					'errors' => [
							'required' => 'Quantity field is required.',
							'numeric' => 'Numbers Only.'
					]
			],
	];

		public $items = [
			'item_code' => [
					'label'  => 'Item Code',
					'rules'  => 'required|max_length[10]|is_unique[items.item_code]',
					'errors' => [
						'required' => 'Item Code field is required.',
						'max_length' => 'Minimum Length of 10 Only.',
						'is_unique' => 'Information Already Exist.'
					]
			],

			'item_category_code' => [
					'label'  => 'Item Category',
					'rules'  => 'required',
					'errors' => [
							'required' => 'Item Category field is required.',
					]
			],

			'brand_name' => [
					'label'  => 'Brand',
					'rules'  => 'required',
					'errors' => [
							'required' => 'Brand field is required.',
					]
			],

			'property_no' => [
					'label'  => 'Property Number',
					'rules'  => 'required|numeric|max_length[3]',
					'errors' => [
						'required' => 'Property Number field is required.',
						'numeric' => 'Numbers Only.',
						'max_length' => 'Maximum length of 3 Only,',

					]
			],

			'description' => [
					'label'  => 'Description',
					'rules'  => 'required',
					'errors' => [
							'required' => 'Description field is required.'
					]
			],

			'location' => [
					'label'  => 'Location',
					'rules'  => 'required',
					'errors' => [
							'required' => 'Location field is required.'
					]
			],

			'quantity' => [
					'label'  => 'Quantity',
					'rules'  => 'required|numeric',
					'errors' => [
							'required' => 'Quantity field is required.',
							'numeric' => 'Number Only.'
					]
			],

			'unit_on_stocks' => [
					'label'  => 'Unit Stocks',
					'rules'  => 'required|numeric',
					'errors' => [
							'required' => 'Unit Stocks field is required.',
							'numeric' => 'Number Only.'
					]
			],
	];

		public $activities = [
			'item_id' => [
					'label'  => 'Item Code',
					'rules'  => 'required',
					'errors' => [
							'required' => 'Item Code field is required.',
					]
			],
	];

	//--------------------------------------------------------------------
	// Rules
	//--------------------------------------------------------------------
}
