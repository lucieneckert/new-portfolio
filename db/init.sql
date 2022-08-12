CREATE TABLE projects (
    id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT UNIQUE,
    name TEXT NOT NULL UNIQUE,
    thumbnail_path TEXT NOT NULL UNIQUE,
    page_url TEXT NOT NULL UNIQUE,
    in_progress INTEGER
);

CREATE TABLE categories (
    id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT UNIQUE,
    type TEXT NOT NULL UNIQUE,
    category_color TEXT NOT NULL
);

CREATE TABLE project_categories (
    id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT UNIQUE,
    project_id INTEGER NOT NULL,
    category_id INTEGER NOT NULL,
    FOREIGN KEY (project_id) REFERENCES projects(id),
    FOREIGN KEY (category_id) REFERENCES categories(id)
);

CREATE TABLE tools (
    id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT UNIQUE,
    name TEXT NOT NULL UNIQUE
);

CREATE TABLE project_tools (
    id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT UNIQUE,
    project_id INTEGER NOT NULL,
    tool_id INTEGER NOT NULL,
    FOREIGN KEY (project_id) REFERENCES projects(id),
    FOREIGN KEY (tool_id) REFERENCES tools(id)
);


-- create categories
INSERT INTO categories (type, category_color) 
VALUES ("games", "#820263"), ("coding", "#553E4E"), ("web", "#F75C03"), ("music", "#D90368"); 
-- create tools
INSERT INTO tools (name)
VALUES
    ('Java'),
    ('LMMS'),
    ('GIMP'),
    ('Paint.NET'),
    ('Godot Engine'),
    ('Unity Engine'),
    ('Blender'),
    ('Ableton'),
    ('C++'),
    ('Python'),
    ('Jupyter Notebooks'),
    ('OCaml'),
    ('PyTorch'),
    ('HTML'),
    ('CSS'),
    ('PHP')
;
-- game dev
INSERT INTO projects (name, thumbnail_path, page_url, in_progress) 
VALUES 
    ('Ragdoll Royale', 'ragdoll.png', 'rr', 0),
    ('Springs with Guns', 'springs.png', 'swg', 1),
    ('Enjoyable Block Game', 'blocks.png', 'ebg', 0),
    ('A Small Game About Juiceboxes', 'juiceboxes.png', 'jb', 0),
    ('Parole in One', 'golf.png', 'pio', 0)
;
INSERT INTO project_categories (project_id, category_id) VALUES (1, 1), (2, 1), (3, 1), (4, 1), (5, 1);
INSERT INTO project_tools (project_id, tool_id)
VALUES
    (1, 3), (1, 8), (1, 9),
    (2, 2), (2, 4), (2, 5),
    (3, 2), (3, 4), (3, 5),
    (4, 2), (4, 4), (4, 5),
    (5, 1), (5, 2), (5, 3)
;
-- coding projects
INSERT INTO projects (name, thumbnail_path, page_url, in_progress)
VALUES 
    ('GAN Pokemon Sprite Tuning', 'pokemon.png', 'pokegan', 1),
    ('CamlClimbers: Tetris variant in OCaml', 'camls.png', 'caml-climbers', 0),
    ('Random Mystery Dungeon Generator', 'dungeons.png', 'random-md', 1)
;
INSERT INTO project_categories (project_id, category_id) VALUES (6, 2), (7, 2), (8, 2);
INSERT INTO project_tools (project_id, tool_id)
VALUES
    (6, 10), (6, 11), (6, 13),
    (7, 12),
    (8, 10)
;
-- web dev
INSERT INTO projects (name, thumbnail_path, page_url, in_progress)
VALUES 
    ('Misc. Web Dev Projects', 'webdev.png', 'webdev', 0)
;
INSERT INTO project_categories (project_id, category_id) VALUES (9, 3);
INSERT INTO project_tools (project_id, tool_id) VALUES (9, 14), (9, 15), (9, 16);
-- music
INSERT INTO projects (name, thumbnail_path, page_url, in_progress)
VALUES 
    ('Ragdoll Royale OST', 'rr-ost.png', 'rr-ost', 0),
    ('A Small Game About Juiceboxes OST', 'jb-ost.png', 'jb-ost', 0),
    ('Parole in One OST', 'pio-ost.png', 'pio-ost', 0)
;
INSERT INTO project_categories (project_id, category_id) VALUES (10, 4), (11, 4), (12, 4);
INSERT INTO project_tools (project_id, tool_id)
VALUES
    (10, 8), (11, 2), (12, 2)
;


